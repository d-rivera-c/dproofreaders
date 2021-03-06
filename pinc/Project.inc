<?php
include_once($relPath.'user_is.inc');
include_once($relPath.'project_states.inc');
include_once($relPath.'misc.inc'); // html_safe()
include_once($relPath.'forum_interface.inc'); // topic_create
include_once($relPath.'SettingsClass.inc');
include_once($relPath.'User.inc');
include_once($relPath.'MARCRecord.inc');
include_once($relPath.'stages.inc'); // is_formatting_round()

class NonexistentProjectException extends Exception { }

class Project
{
    function __construct( $arg )
    {
        if ( is_string($arg) )
        {
            // $arg is the projectid.
            $res = mysqli_query(DPDatabase::get_connection(), "
                SELECT *
                FROM projects
                WHERE projectid = '$arg'
            ") or die(mysqli_error(DPDatabase::get_connection()));
            $row = mysqli_fetch_assoc($res);
            if (!$row)
            {
                throw new NonexistentProjectException("no project with projectid='$arg'");
            }
            $row['t_retrieved'] = time();
        }
        elseif ( is_array($arg) )
        {
            // $arg is assumed to be an associative array, such
            // as would be returned by mysqli_fetch_assoc().
            $row = $arg;
        }
        else
        {
            $arg_type = gettype($arg);
            die( "Project::Project(): 'arg' has unexpected type $arg_type" );
        }

        foreach ( $row as $key => $value )
        {
            $this->$key = $value;
        }

        // -------------------------------------------------

        global $projects_url, $projects_dir;

        $this->url = "$projects_url/$this->projectid";
        $this->dir = "$projects_dir/$this->projectid";
    }

    // -------------------------------------------------------------------------
    // Property getters

    public function __get($name)
    {
        global $pguser;

        switch($name)
        {
            case "dir_exists":
                return is_dir($this->dir);
            case "pages_table_exists":
                return does_project_page_table_exist($this->projectid);
            case "credits_line":
                return $this->_get_credits_line();
            case "image_source_name":
                $this->_load_image_source();
                return $this->image_source_name;
            case "can_be_managed_by_current_user":
                return $this->can_be_managed_by_user($pguser);
            case "names_can_be_seen_by_current_user":
                return $this->names_can_be_seen_by_user($pguser);
            case "PPer_is_current_user":
                return $this->PPer_is_user($pguser);
            case "PPVer_is_current_user":
                return $this->PPVer_is_user($pguser);
        }

        // If we don't recognize the property, raise a notice and return null
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    private function _load_image_source()
    {
        if(!isset($this->image_source))
        {
            $this->image_source_name = '';
            $this->image_source_credit = '';
            return;
        }

        $imso_res = mysqli_fetch_assoc(mysqli_query(DPDatabase::get_connection(), "
            SELECT full_name, credit
            FROM image_sources
            WHERE code_name = '$this->image_source'
        "));
        $this->image_source_name = $imso_res['full_name'];
        $this->image_source_credit = $imso_res['credit'];
    }

    private function _get_credits_line()
    {
        $credits_line = $this->_create_credit_line();

        // if $this->image_source = _internal, the images were done by or for a DP User,
        // whose username should be recorded in image_preparer otherwise, we need to
        // look up info on the specific "external" image source
        if($this->image_source != "_internal")
        {
            $this->_load_image_source();
            // Can't put a . at the end of the output of _create_credit_line, since it ends
            // with a url and the . breaks the url in some browsers; yet the image source credit,
            // grammatically and aestehtically, needs some sort of separation from the
            // "main" credit line - so we enclose it in ( )
            $credits_line = "$credits_line ({$this->image_source_credit})";
        }
        return $credits_line;
    }

    // -------------------------------------------------------------------------

    function PPer_is_user($username)
    {
        if ( is_null($username) ) return FALSE;
        return
            ($this->postproofer == $username
             ||
             (
              $this->checkedoutby == $username
              &&
              (
               $this->state != 'proj_post_second_checked_out'
               &&
               $this->state != 'proj_correct_checked_out'
               )
              )
             );
    }

    // -------------------------------------------------------------------------

    function PPVer_is_user($username)
    {
        if ( is_null($username) ) return FALSE;
        return
            ( $this->state == 'proj_post_first_checked_out'
              || $this->state == 'proj_post_second_checked_out' )
            && $this->checkedoutby == $username
            && user_can_work_in_stage($username, 'PPV');
        // You might think that we should only allow
        //     $this->state == 'proj_post_second_checked_out'
        // But if someone with PPV-ability is PPing a project,
        // they can (and probably will) directly post to PG,
        // with no explicit PPV phase. Thus, they are effectively
        // both the PPer and PPVer of the project.
    }

    // -------------------------------------------------------------------------

    function can_be_managed_by_user( $username )
    {
        if ( is_null($username) ) return FALSE;
        return
            ( $username == $this->username
            || that_user_is_a_sitemanager($username)
            || that_user_is_proj_facilitator($username) );
    }

    // -------------------------------------------------------------------------

    function names_can_be_seen_by_user( $username)
    {
        global $public_page_details;
        if ( is_null($username) ) return FALSE;
        if ( $public_page_details ) return TRUE;
        return
            ($this->can_be_managed_by_user($username)
             || $this->PPer_is_user($username)
             || $this->PPVer_is_user($username) );
    }

    // -------------------------------------------------------------------------

    function clearance_line_can_be_seen_by_current_user()
    {
        // The clearance line normally contains the email address of the
        // person who submitted the clearance request. Since this is
        // private information, we restrict who can see it.
        // Also, the clearance line is necessary to uploading a project to PG,
        // so we restrict its visibility to prevent unauthorized uploads.

        return (
            $this->can_be_managed_by_current_user
            || $this->PPVer_is_current_user
            || ($this->PPer_is_current_user && user_has_DU_access())
        );
    }

    // -------------------------------------------------------------------------

    // These should be treated as constants.
    // (PHP doesn't appear to allow constants as class members.)
    var $CBP_OKAY                         = 0;
    var $CBP_PROJECT_NOT_IN_ROUND         = 1;
    var $CBP_PROJECT_NOT_AVAILABLE        = 2;
    var $CBP_REQUESTOR_NOT_LOGGED_IN      = 3;
    var $CBP_USER_NOT_QUALIFIED_FOR_ROUND = 4;

    function can_be_proofed_by_current_user()
    // (where "proofed" means "worked on in a round, right now".)
    // Returns an array consisting of:
    // -- one of the above codes, and
    // -- a suggested error message.
    {
        global $code_url, $pguser;

        $state = $this->state;
        $round = get_Round_for_project_state($state);

        if (is_null($round))
        {
            // The project is not in any round.
            return array(
                $this->CBP_PROJECT_NOT_IN_ROUND,
                _('The project is not in a round.')
            );
        }

        if ( $state != $round->project_available_state )
        {
            // The project is in a round, but isn't available.
            return array(
                $this->CBP_PROJECT_NOT_AVAILABLE,
                _('Users are not allowed to work on the project in its current state.')
            );
        }

        if ( is_null($pguser) )
        {
            return array(
                $this->CBP_REQUESTOR_NOT_LOGGED_IN,
                _('Registered users can work on the project, but you are not logged in.')
            );
        }

        $uao = $round->user_access($pguser);
        if ( !$uao->can_access )
        {
            // The project is available, but the current user isn't
            // allowed to work in the round that the project is in.
            return array(
                $this->CBP_USER_NOT_QUALIFIED_FOR_ROUND,
                sprintf(
                    // TRANSLATORS: %1$s is the round name, %2$s is the round ID (eg: P1)
                    _('You have not yet been cleared to work on projects in %1$s (%2$s).'),
                    $round->name,
                    $round->id
                )
                . "<br>"
                . sprintf(
                    // TRANSLATORS: %2$s is the round ID (eg: P1)
                    _('Please visit <a href="%1$s">the %2$s home</a> to find out what happens in this round and how you can qualify to work in it.'),
                    "$code_url/tools/proofers/round.php?round_id=$round->id",
                    $round->id
                )
            );
        }

        return array(
            $this->CBP_OKAY,
            "You may work on this project."
        );
    }

    function user_can_do_quick_check()
    {
        // used in PQC itself and to enable links to PQC
        // in project.php and ProjectSearchResults.inc
        return $this->can_be_managed_by_current_user || $this->PPer_is_current_user;
    }

    // -------------------------------------------------------------------------

    private function _create_credit_line()
    // The string will not be localized, since it should be ready
    // to be included with the finished project.
    {
        global $site_url;

        $credits = array();

        $creditables = array(
            'pm' => $this->username,        // username
            'pp' => $this->postproofer,     // username
            'ip' => $this->image_preparer,  // username
            'tp' => $this->text_preparer,   // username
            'ec' => $this->extra_credits,   // arbitrary text
            'cp' => $this->scannercredit    // username or arbitrary text
        );

        foreach ($creditables as $role => $name)
        {
            if ( $name == '' ) continue;

            $credit = NULL;

            if ($role == 'cp')
            {
                // $name ($project->scannercredit) could be
                // a username or just a typed-in string
                try
                {
                    $user = new User($name);
                }
                catch(NonexistentUserException $exception)
                {
                    // $name is not a username.
                    // So use it as the credit.
                    $credit = $name;
                }
            }

            if ($role == 'ec')
            {
                // $name ($project->extra_credits) should not be a username;
                // It is just a typed-in string, and will be presented as is,
                // as part of the list.
                $credit = $name;
            }

            if ( is_null($credit) )
            {
                // $name is a username.
                $username = $name;

                if (!wants_anonymity($username, $role))
                {
                    $credit = get_credit_name($username);

                    // If the user has specified a Credit Name of "other" but used
                    // an empty string we should treat it as no credit wanted.
                    if($credit === "")
                    {
                        $credit = NULL;
                    }
                }
            }

            if ( !is_null($credit) )
            {
                if (!in_array($credit, $credits))
                    array_push($credits, $credit);
            }
        }

        if (count($credits) > 0)
        {
            $credits_line = join(', ', $credits) . " and the Online Distributed Proofreading Team at $site_url";
        }
        else
        {
            $credits_line = "The Online Distributed Proofreading Team at $site_url";
        }

        return $credits_line;
    }

    // -------------------------------------------------------------------------

    function ensure_topic()
    {
        if ( !empty($this->topic_id) ) return $this->topic_id;

        // Find out PM's preference about being signed up for notifications of replies to this topic.
        $userSettings =& Settings::get_Settings($this->username);
        $sign_PM_up = $userSettings->get_boolean("auto_proj_thread");

        // determine appropriate forum to create thread in
        $forum_id = get_forum_id_for_project_state($this->state);

        $post_subject = "\"{$this->nameofwork}\"    by {$this->authorsname}";

        global $code_url;
        $post_body = <<<EOS
This thread is for discussion specific to "$this->nameofwork" by $this->authorsname.

If you have a question about this project, please review the [url=$code_url/project.php?id={$this->projectid}&detail_level=2]Project Comments[/url], as well as any posts below, as your question may already be answered there.

If you haven't found the answer to your question, or want to make a comment about this project, click on the [b]Post Reply[/b] button to post your question or comment in this thread.

(This post is automatically generated.)
EOS;

        $topic_id = topic_create(
            $forum_id,
            $post_subject,
            $post_body,
            $this->username,
            TRUE,
            $sign_PM_up );

        // Save $topic_id in db and in $this.
        $update_project = mysqli_query(DPDatabase::get_connection(), "
            UPDATE projects
            SET topic_id=$topic_id
            WHERE projectid='{$this->projectid}'
        ");
        $this->topic_id = $topic_id;

        return $topic_id;
    }

    // -------------------------------------------------------------------------

    function email_introduction()
    // Return a string that can be included in the body of an email message,
    // introducing this project as the focus of the message.
    {
        global $site_name, $code_url;

        $projectid = $this->projectid;
        $title = $this->nameofwork;

        return
            sprintf(
                _("This is an automated message from the %s site regarding the following project:"),
                // Should really be localized according to the preferences of the *recipient*.
                $site_name
            )
            . "\n"
            . "    \"$title\"\n"
            . "    ($projectid)\n"
            . "    $code_url/project.php?id=$projectid\n"
            . "\n";
    }

    // -------------------------------------------------------------------------

    function get_hold_states()
    // Return an array containing the states for which this project has holds.
    {
        $hold_states = array();
        $res = mysqli_query(DPDatabase::get_connection(), "
            SELECT state
            FROM project_holds
            WHERE projectid='{$this->projectid}'
        ") or die(mysqli_error(DPDatabase::get_connection()));
        while( list($state) = mysqli_fetch_row($res) )
        {
            $hold_states[] = $state;
        }
        return $hold_states;
    }

    // -------------------------------------------------------------------------

    // Given a MARCRecord, write a dc XML document for this project
    function create_dc_xml_oai($marc_record)
    {
        global $charset, $site_name, $code_url, $projects_dir;

        $dirname = "$projects_dir/$this->projectid";
        $filename = "$dirname/dc.xml";

        if(!is_dir($dirname))
        {
            // If the project directory doesn't exist, the project was likely
            // deleted or posted/archived.
            return;
        }

        if(!file_exists($filename))
        {
            touch($filename);
        }
        $xmlpage = <<<XML
<?xml version="1.0" encoding="$charset" ?>
    <dc xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://purl.org/dc/elements/1.1/ http://www.openarchives.org/OAI/dc.xsd">
      <title>$this->nameofwork</title>
      <creator>$this->authorsname</creator>
      <subject>$marc_record->subject</subject>
      <description>$marc_record->description</description>
      <publisher>$site_name</publisher>
      <contributor>$this->credits_line</contributor>
      <date>$marc_record->date</date>
      <type>$this->genre</type>
      <format>XML</format>
      <identifier>$code_url/project.php?id=$this->projectid</identifier>
      <source>LCCN: $marc_record->lccn</source>
      <language>$this->language</language>
      <rights>$code_url/agreement.php</rights>
    </dc>
XML;

        // The URL used in <rights> was originally a pgdp.net address which didn't exist.
        // Now it's a page under $code_url that might exist someday.

        $fp = fopen($filename, "w");
        if($fp)
        {
            fwrite($fp, $xmlpage);
            fclose($fp);
        }
    }

    // MARC records for a project are saved in marc_records, one per projectid.
    // The original_* columns hold the values returned from the YAZ search
    // upon project creation. The updated_* columns hold updated YAZ records
    // based on edits to the project record.

    // Populate the original_* columns for this project's MARC record
    public function init_marc_record($marc_record)
    {
        $original_marc_array = $marc_record->get_yaz_array();

        mysqli_query(DPDatabase::get_connection(), "
            INSERT INTO marc_records
            SET
                projectid      = '$this->projectid',
                original_array = '".base64_encode(serialize($original_marc_array))."'
        ");
    }

    // Update the updated_* columns for this project's MARC record
    public function save_marc_record($marc_record)
    {
        $updated_marc_array = $marc_record->get_yaz_array();

        mysqli_query(DPDatabase::get_connection(), "
            UPDATE marc_records
            SET
                updated_array = '".base64_encode(serialize($updated_marc_array))."'
            WHERE projectid = '$this->projectid'
        ");
    }

    // Load the updated MARC record for this project
    public function load_marc_record()
    {
        $updated_record = new MARCRecord();

        $result = mysqli_query(DPDatabase::get_connection(), "
            SELECT updated_array
            FROM marc_records
            WHERE projectid = '$this->projectid'
        ");

        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        if(!$row)
            return $updated_record;

        $updated_record->load_yaz_array(unserialize(base64_decode($row["updated_array"])));

        return $updated_record;
    }

    // check if project has entered a formatting round
    public function has_entered_formatting_round()
    {
        global $PROJECT_STATES_IN_ORDER;
        $state_index = array_search($this->state, $PROJECT_STATES_IN_ORDER);
        for($i=$state_index; $i>=0; $i--)
        {
            $round = get_Round_for_project_state($PROJECT_STATES_IN_ORDER[$i]);
            if($round && is_formatting_round($round))
            {
                return TRUE;
            }
        }
        return FALSE;
    }
    
    public function check_pages_table_exists(&$message)
    {
        if (!$this->pages_table_exists)
        {
            if ($this->archived != 0)
            {
                $message = _("The project has been archived, so page details are not available.");
            }
            elseif ($this->state == PROJ_DELETE)
            {
                $message = _("The project has been deleted, so page details are not available.");
            }
            else
            {
                $message = _("Page details are not available for this project.");
            }
            return false;
        }
        $message = "";
        return true;
    }
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

function project_has_a_hold_in_state($projectid, $state)
{
    $res = mysqli_query(DPDatabase::get_connection(), "
        SELECT *
        FROM project_holds
        WHERE projectid='$projectid' and state='$state'
    ") or die(mysqli_error(DPDatabase::get_connection()));
    return (mysqli_num_rows($res) > 0);
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

function project_get_auto_PPer( $projectid )
// Return the username of the user to whom the project will be
// automatically checked out for PPing when it reaches the PP stage,
// or NULL if the project will merely go into the available-for-PP state.
{
    $project = new Project($projectid);
    $checkedoutby = $project->checkedoutby;
    $username = $project->username;
    $possible_PPer = '';
    if ( $checkedoutby != '' )
    {
        // The project is reserved for a PPer, so it will be checked out to him/her.
        $possible_PPer = $checkedoutby;
    }
    else
    {
        // The project does not have a reserved PPer.

        $settings =& Settings::get_Settings($username);
        if ($settings->get_boolean('send_to_post'))
        {
            // The PM has send_to_post=yes, so his/her projects go straight to PP.avail.
            return NULL;
        }
        else
        {
            // Otherwise, his/her projects are auto-checked-out to him/her.
            $possible_PPer = $username;
        }
    }
    // now see if the possible PPer is allowed to check projects out
    // when the relevant bit is uncommented,
    // note that it will mean that the send_to_post setting has no effect
    // if the PM does not have PPer status
    if ( $possible_PPer == ''
         || ! user_can_work_in_stage($possible_PPer, 'PP')
         || that_user_is_over_PP_checked_out_limit($possible_PPer) )
    {
        return NULL;
    }
    else
    {
        return $possible_PPer;
    }
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// The following two functions don't particularly belong here, as they aren't
// project-specific. However, nobody else uses them yet.

// $activity should be one of 'cp', 'pm', 'pp', 'ip' and 'tp'.
function wants_anonymity( $login_name, $activity )
{
    $settings =& Settings::get_Settings($login_name);
    return $settings->get_boolean($activity . '_anonymous');
}

// -----------------------------------------------------------------------------

// Returns the real name OR the username OR a user-specified 'other'.
// (If the user hasn't specified anything in the preferences, the
// real name will be returned.
function get_credit_name( $login_name )
{
    if ($login_name == '')
    {
        return '(no name)';
    }

    $settings =& Settings::get_Settings($login_name);
    $credit = $settings->get_value('credit_name', 'real_name');

    if ($credit == 'username')
    {
        $name = $login_name;
    }
    else if ($credit == 'other')
    {
        $name = trim($settings->get_value('credit_other'));
    }
    else // default: real_name
    {
        try
        {
            $user = new User($login_name);
            $name = $user->real_name;
        }
        catch(NonexistentUserException $exception)
        {
            $name = $login_name;
        }
    }
    return $name;
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

function get_formatted_postcomments( $projectid )
// Return the PP-ers' comments for a certain project
// They will be HTML-encoded and with line breaks
// converted to <br> .
{
    $project = new Project($projectid);

    return nl2br(html_safe($project->postcomments));
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// Determines if the project's pages table exists
function does_project_page_table_exist($projectid)
{
    // Two queries can be done to determine if a table exists:
    //    DESCRIBE table
    //    SELECT 1 FROM table LIMIT 0
    // The second is a mysql-ism and performs better, so we use that one.
    $result = mysqli_query(DPDatabase::get_connection(), "SELECT 1 FROM $projectid LIMIT 0");

    if($result) {
        mysqli_free_result($result);
        return TRUE;
    } else {
        return FALSE;
    }
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// Checks if $value has the form of a valid project ID, either in its
// long form (projectID####) or just the project number (####).
// If it does, it returns it, otherwise dies with a warning.
function validate_projectID($param_name, $value, $allownull = false)
{
    if (!isset($value) && $allownull)
        return null;
    if (1 == preg_match('/^projectID[0-9a-f]{13}$/', $value))
        return $value;
    if (1 == preg_match('/^[0-9a-f]{13}$/', $value))
        return "projectID$value";
    die(sprintf(
        _("The value of parameter '%1\$s' ('%2\$s') is not a valid projectID."),
        html_safe($param_name),
        html_safe($value)
    ));
}

// Checks if $value contains only legitimate characters for
// the filename of a page image file in a project.
// If it does, it returns it, otherwise dies with a warning.
function validate_page_image_filename($param_name, $value, $allownull = false)
{
    if (!isset($value) && $allownull) return null;
    if (1 == preg_match('/^[a-zA-Z0-9_.-]{5,16}$/', $value)) return $value;
    die(sprintf(
        _("The value of parameter '%1\$s' ('%2\$s') is not a valid page image filename."),
        html_safe($param_name),
        html_safe($value)
    ));
}

// vim: sw=4 ts=4 expandtab
?>
