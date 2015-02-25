<?php
class Debug {

public function __construct() {
$handle = fopen('debug.log', 'a+');

if (file_exists('debug.log')) {
return true;
}

if (!file_exists('debug.log')) {
$filename = 'debug.log';
if (!$handle) {
return false;
}

}

}

public function NewMessage($message, $debugtoscreen = 'true') {
$handle = fopen('debug.log', 'a+');

$time = date ("d-m-y h:i:sa");
$msg = ''.$time.': '.$message.'';

if (fwrite($handle, $msg) == TRUE) {
if ($debugtoscreen == 'true') {
echo $message;
return true;
}

else {
return true;
}

}

return false;
}



}

?>
