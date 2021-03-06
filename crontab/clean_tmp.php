<?php
$relPath="./../pinc/";
include_once($relPath.'base.inc');
include_once($relPath.'misc.inc');

// check that caller is localhost or bail
if(!requester_is_localhost())
    die("You are not authorized to perform this request.");

// remove temporary spellcheck files older than 1 day
unset($output);
exec("/usr/bin/find '$aspell_temp_dir' -type f -mtime +1 -delete", $output, $return);
if($return != 0) {
    echo "An error occurred while cleaning up files.\n";
    echo "Return value: $return\n";
    echo "Command output:\n";
    foreach($output as $line)
        echo "    $line\n";
}
