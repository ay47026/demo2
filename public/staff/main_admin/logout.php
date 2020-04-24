<?php
require_once('../../../private/initialize.php');

// Log out the admin
$session->logout();
// write to a log file
$logger->get_activity_logger('LOGOUT','The Main Admin was Log-out successful on '.date("j F Y, g:i:s A"));

redirect_to(url_for('/staff/main_admin/md_login.php'));

?>
