<?php
require('textlocal.class.php');

$message = "this";
echo "chal";
$textlocal = new Textlocal(false,false,'	wmutmIzeG00-5AL3sk5ZgENuX2V8aqnqIYTW9UNDcd');

$sender = 'TXTLCL';
$message = $message;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    echo($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>