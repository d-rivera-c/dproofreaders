<?
// This script is actually 4 scripts in one file:
//   - Cleanup Files: Removes duplicates and checks in missing pages after 3 hours
//   - Promote Level: If a project is ready to be promoted, it sends it to round 2
//   - Complete Project: If a project has completed round 2, it sends it to post-processing or assign to the project manager
//   - Release Projects: If there are not enough projects available to end users, it will release projects waiting to be released
$relPath="./../../pinc/";

include($relPath.'connect.inc');
$db_Connection=new dbConnect();

include($relPath.'projectinfo.inc');
$projectinfo = new projectinfo();

include($relPath.'project_trans.inc');

  include('autorelease.php');
  include('sendtopost.php');

$trace = TRUE;

// -----------------------------------------------------------------------------

function pages_indicate_bad_project( $projectid, $round )
// Do the states of the project's pages (in the given round)
// indicate that the project is bad?
{
    global $trace;

    if ($round == 1)
    {
        $BAD_PAGE_STATE = BAD_FIRST;
        $AVAIL_PAGE_STATE = AVAIL_FIRST;
    }
    else if ($round == 2)
    {
        $BAD_PAGE_STATE = BAD_SECOND;
        $AVAIL_PAGE_STATE = AVAIL_SECOND;
    }

    // If it has no bad pages, it's good.
    //
    $n_bad_pages = mysql_result(mysql_query("
        SELECT COUNT(*) FROM $projectid WHERE state = '$BAD_PAGE_STATE'
        "),0);
    if ($trace) echo "n_bad_pages = $n_bad_pages<br>\n";
    //
    if ($n_bad_pages == 0) return FALSE;


    // If it has at least 10 bad pages,
    // reported by at least 3 different users, it's bad.
    //
    $n_unique_reporters = mysql_result(mysql_query("
        SELECT COUNT(DISTINCT(b_user)) FROM $projectid WHERE state='$BAD_PAGE_STATE'
        "),0);
    if ($trace) echo "n_unique_reporters = $n_unique_reporters<br>\n";
    //
    if ($n_bad_pages >= 10 && $n_unique_reporters >= 3) return TRUE;


    // In round 2, if it has any bad pages
    // and no available pages, it's bad.
    //
    if ($round == 2)
    {
        $n_avail_pages = mysql_result(mysql_query("
            SELECT COUNT(*) FROM $projectid WHERE state = '$AVAIL_PAGE_STATE'
            "),0);
        if ($trace) echo "n_avail_pages = $n_avail_pages<br>\n";
        if ($n_avail_pages == 0) return TRUE;
    }

    // Otherwise, it's good.
    //
    return FALSE;
}

// -----------------------------------------------------------------------------

  $one_project = isset($_GET['project'])?$_GET['project']:0;
  
  if ($one_project) {
    $verbose = 0;
    $allprojects = mysql_query("SELECT projectid, state, username, nameofwork FROM projects WHERE projectid = '$one_project'");
  } else {
    $verbose = 1;
    $allprojects = mysql_query("SELECT projectid, state, username, nameofwork FROM projects WHERE state = '".PROJ_PROOF_FIRST_AVAILABLE."' OR state = '".PROJ_PROOF_FIRST_VERIFY."' OR state = '".PROJ_PROOF_SECOND_AVAILABLE."' OR state = '".PROJ_PROOF_SECOND_VERIFY."' OR state = '".PROJ_PROOF_FIRST_COMPLETE."' OR state = '".PROJ_PROOF_SECOND_COMPLETE."' OR state='".PROJ_PROOF_FIRST_BAD_PROJECT."'");
  }
  if ($allprojects != "") { $numrows = mysql_num_rows($allprojects); } else $numrows = 0;

  $pagesleft = 0;
  $rownum = 0;

  $todaysdate = time();

  while ($rownum < $numrows) {
    $project = mysql_result($allprojects, $rownum, "projectid");
    $state = mysql_result($allprojects, $rownum, "state");
    $username = mysql_result($allprojects, $rownum, "username");
    $nameofwork = mysql_result($allprojects, $rownum, "nameofwork");

    if ($trace)
    {
        echo "<br>\n";
        echo "project = $project<br>\n";
        echo "state   = $state<br>\n";
    }

    $projectinfo->update($project, $state);

//Bad Page Error Check

    foreach (array(1,2) as $round)
    {
        if ($round == 1)
        {
            $BAD_PROJECT_STATE = PROJ_PROOF_FIRST_BAD_PROJECT;
            $AVAILABLE_PROJECT_STATE = PROJ_PROOF_FIRST_AVAILABLE;
        }
        else if ($round == 2)
        {
            $BAD_PROJECT_STATE = PROJ_PROOF_SECOND_BAD_PROJECT;
            $AVAILABLE_PROJECT_STATE = PROJ_PROOF_SECOND_AVAILABLE;
        }

        if ( ($state == $AVAILABLE_PROJECT_STATE) || ($state == $BAD_PROJECT_STATE && $one_project) )
        {
            if ( pages_indicate_bad_project( $project, $round ) )
            {
                // This project's pages indicate that it's bad.
                // If it isn't marked as such, make it so.
                if ($trace) echo "project looks bad.<br>\n";
                if ($state != $BAD_PROJECT_STATE)
                {
                    if ($trace) echo "changing its state to $BAD_PROJECT_STATE<br>\n";
                    $error_msg = project_transition( $project, $BAD_PROJECT_STATE );
                    if ($error_msg)
                    {
                        echo "$error_msg<br>\n";
                    }
                    $state = $BAD_PROJECT_STATE;
                }
            }
            else
            {
                // Pages don't indicate that the project is bad.
                // (Although it could be bad for some other reason. Hmmm.)
                if ($trace) echo "project looks okay.<br>\n";
                if ($state == $BAD_PROJECT_STATE)
                {
                    // We could change the project's state to
                    // $AVAILABLE_PROJECT_STATE,
                    // but we don't have to, because it will be set later
                    // (either to that, or some other state value).
                    if ($trace) echo "pretending to change its state to $AVAILABLE_PROJECT_STATE<br>\n";
                    $state = $AVAILABLE_PROJECT_STATE;
                }
            }
            $pagesleft += ($projectinfo->total_pages + $projectinfo->avail1_pages);
            $projectinfo->availablepages = $projectinfo->avail1_pages;
        }
    }

    $projectinfo->update($project, $state);
    // Decide which round the project is in
    if ($state == PROJ_PROOF_FIRST_AVAILABLE ||
        $state == PROJ_PROOF_FIRST_WAITING_FOR_RELEASE ||
        $state == PROJ_PROOF_FIRST_BAD_PROJECT ||
        $state == PROJ_PROOF_FIRST_VERIFY ||
        $state == PROJ_PROOF_FIRST_COMPLETE) {
      $outtable = $projectinfo->out1_rows;
      $numoutrows = $projectinfo->out1_pages;
      $temptable = $projectinfo->temp1_rows;
      $numtemprows = $projectinfo->temp1_pages;
      $timetype = "round1_time";
      $texttype = "round1_text";
      $usertype = "round1_user";
      $newstate = AVAIL_FIRST;

    } else if ($state == PROJ_PROOF_SECOND_AVAILABLE ||
        $state == PROJ_PROOF_SECOND_WAITING_FOR_RELEASE ||
        $state == PROJ_PROOF_SECOND_BAD_PROJECT ||
        $state == PROJ_PROOF_SECOND_VERIFY ||
        $state == PROJ_PROOF_SECOND_COMPLETE) {
      $outtable = $projectinfo->out2_rows;
      $numoutrows = $projectinfo->out2_pages;
      $temptable = $projectinfo->temp2_rows;
      $numtemprows = $projectinfo->temp2_pages;
      $timetype = "round2_time";
      $texttype = "round2_text";
      $usertype = "round2_user";
      $newstate = AVAIL_SECOND;

    }
    

    if (($state == PROJ_PROOF_FIRST_VERIFY) ||
        ($state == PROJ_PROOF_SECOND_VERIFY) || ($one_project) ||
        (($state == PROJ_PROOF_FIRST_AVAILABLE) && ($projectinfo->availablepages == 0)) || 
        (($state == PROJ_PROOF_SECOND_AVAILABLE) && ($projectinfo->availablepages == 0))) {

        if ($verbose) echo "Found \"$nameofwork\" to verify = $project<BR>";

        // Check in MIA pages
        $page_num = 0;
        $dietime = time() - 14400; // 4 Hour TTL

        while ($page_num < $numoutrows) {

            $fileid = mysql_result($outtable, $page_num, "fileid");
            $timestamp = mysql_result($outtable, $page_num, $timetype);

            if ($timestamp == "") $timestamp = $dietime;

            if ($timestamp <= $dietime) {
                  $sql = mysql_query("UPDATE $project SET state = '$newstate', $timetype = '' WHERE fileid = '$fileid'");
            }
            $page_num++;
        }

        // Check in MIA temp pages
        $page_num2 = 0;

        while ($page_num2 < $numtemprows) {

            $fileid = mysql_result($temptable, $page_num2, "fileid");
            $timestamp = mysql_result($temptable, $page_num2, $timetype);

            if ($timestamp == "") $timestamp = $dietime;

            if ($timestamp <= $dietime) {
                  $sql = mysql_query("UPDATE $project SET state = '$newstate', $timetype = '' WHERE fileid = '$fileid'");
            }
            $page_num2++;
        }

        $projectinfo->update($project, $state);

        if (($state == PROJ_PROOF_FIRST_AVAILABLE) || ($state == PROJ_PROOF_FIRST_VERIFY)) {

            if ($projectinfo->done1_pages == $projectinfo->total_pages) { $state = PROJ_PROOF_FIRST_COMPLETE; } else $state = PROJ_PROOF_FIRST_AVAILABLE;
            
        } else if (($state == PROJ_PROOF_SECOND_AVAILABLE) || ($state == PROJ_PROOF_SECOND_VERIFY)) {

            if ($projectinfo->done2_pages == $projectinfo->total_pages) { $state = PROJ_PROOF_SECOND_COMPLETE; } else $state = PROJ_PROOF_SECOND_AVAILABLE;

        }
        	
        $sql = "UPDATE projects SET state = '$state' WHERE projectid = '$project'";
        if ($verbose) echo "New state = $state<P>";
        $result = mysql_query($sql);
      }


    // Promote Level
    if ($state == PROJ_PROOF_FIRST_COMPLETE) {

        $timestamp = time();
        $updatefile = mysql_query("UPDATE $project SET state = '".AVAIL_SECOND."', round2_time = '$timestamp'");

        if ($verbose) echo "Found project to promote = $project<BR>";

        $updatefile = mysql_query("UPDATE projects SET state = '".PROJ_PROOF_SECOND_AVAILABLE."' WHERE projectid = '$project'");
    }

    // Completed Level
    if ($state == PROJ_PROOF_SECOND_COMPLETE) {
        sendtopost($project, $username, $todaysdate);
    }
    $rownum++;
  }

  if ($trace) echo "<br>\n";
  
  if ($verbose) print "Total pages available = ".$pagesleft."<BR>";

  if (!$one_project) { autorelease($pagesleft); }
  
  else {
  	 echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ;URL=projectmgr.php\">"; 
  	 }
?>
