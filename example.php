<?php
require_once('debug.class.php');

$debug = new Debug();
$debug->NewMessage('This is a debug message and can be seen ind the debug.log file and in the webbrowser.', 'true');

?>
