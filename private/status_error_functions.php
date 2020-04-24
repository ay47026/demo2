<?php
function require_login($redirect_url)
{
    global $session;
    if (!$session->is_logged_in()) {
        redirect_to($redirect_url);
    } else {
        // let them display
    }
}

// As redirect doesn't work with with AJAX.
// to work redirect in AJAX we need to use redirect function in JAVASCRIPT.
// so this function is used for checking login through AJAX
// hence, here we aren't redirecting to another page instead we are just returning true/false.
function ajax_require_login()
{
    global $session;
    if (!$session->is_logged_in()) {
        // you need to redirect for false return in AJAX-JAVASCRIPT
        echo json_encode('login_again');
        exit;
     }
    // else {
    //     // true means user already loggedin.

    //     return true;
    // }
}
/* if already loggin then redirect back to index page*/
function is_already_login($path='')
{
    global $session;
    if ($session->is_logged_in()) {
        redirect_to(url_for($path));
    }
}

function display_errors($errors=array())
{
    $output = '';
    if (!empty($errors)) {
        $output .= "<div class=\"errors\">";
        $output .= "Please fix the following errors:";
        $output .= "<ul>";
        foreach ($errors as $error) {
            $output .= "<li>" . h($error) . "</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;
}

/*function get_and_clear_session_message() {
  if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
    return $msg;
  }
}*/

function display_session_message()
{
    global $session;
    $msg = $session->message();
    if (isset($msg) && $msg != '') {
        $session->clear_message();
        return '<div id="message">' . h($msg) . '</div>';
    }
}
