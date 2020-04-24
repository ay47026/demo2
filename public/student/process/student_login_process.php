<?php
// simulate a slow server...
sleep(2);

function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
// if this is not AJAX request then stop executing.
if(!is_ajax_request()) { exit; }


require_once('../../../private/initialize.php');

if(is_post_request()){

  // Create record using post parameters
  $args = $_POST;
  //$args['captcha_code']= $_POST['captcha_code'];

  // $subadmin = new StudentLogin($args);
  //print_r($subadmin);

/* If already loggin then redirect back to index page.
   It means you can't open this page if you have already logged-in.
*/

//is_already_login();

  // Create record using post parameters
  // $args = $_POST['student'];

  //$args['captcha_code']= $_POST['captcha_code'];

  $student = new StudentLogin($args);
  //print_array_using_pre_tag($student,$exit= true);
  $errors = $student->get_errors();

  if(empty($errors)) {
    $admin = StudentLogin::find_by_roll_no($args['roll_no']);

    // test if admin found and password is correct
    if($admin !=false && $admin->verify_password($args['password'])) {
      //echo json_encode($admin);
      // Mark admin as logged in
      $session->login($admin);
      $session-> message('The student logged-in successfully.');
      // write to a log file
      $logger->get_activity_logger('LOGIN','The student logedin successfully on '.date("j F Y, g:i:s A"));
      //redirect_to(url_for('/staff/student/index.php'));
      unset($student);
      // do not try to the name 'login_success' inside function jsone_encode() to something else.
      //beacuse AJAX is taking this string 'login_success' and redirect to another page.
      // In future, If you want change string to something else then you have to also change string in AJAX
      echo json_encode(array('login' => true, 'script_loadtime' => $_SESSION['script_loadtime'] ?? ''));
    } else {
      // username not found or password does not match
      $student->errors[] = 'Log in was unsuccessful.';
      $errors_array = array('errors'=> $student->errors, 'login' => false, 'script_loadtime' => $_SESSION['script_loadtime'] ?? '');
      echo json_encode($errors_array);
      
      
      // write to a log file
    $logger->get_activity_logger('LOGIN FAILED','The Main Admin was not Log-in unsuccessful on '.date("j F Y, g:i:s A"));
    }
    
    // reset/re-initialize object values.
    // so after creating account succesfully, it will not print the values in the form.
    // TODO : if you are redirecting to another page after creating an account then don't
    // need to reset the object (you can comment given below code).
    //$student = new StudentLogin;

    //redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
   
  } else {
    // show errors
    $errors_array = array('errors'=> $student->errors, 'login' => false, 'script_loadtime' => $_SESSION['script_loadtime'] ?? '');
    echo json_encode($errors_array);
  }
    }else{
        $student = new StudentLogin;
}

  /*-----------[END--ENDS]------------------*/
 ?>