<?php
global $relPath;
$relPath='../../pinc/';
include_once($relPath.'base.inc');
include_once($relPath.'misc.inc');

function dp_class_autoloader($class)
{
    global $relPath;
    if(is_file($relPath.$class.".inc"))
    {
        include_once($relPath.$class.".inc");
    }
    elseif(is_file($relPath.$class."Class.inc"))
    {
        include_once($relPath.$class."Class.inc");
    }
}

spl_autoload_register('dp_class_autoloader');
