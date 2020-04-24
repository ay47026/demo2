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
// print_r($post['student']);
// exit;
    
  // Create record using post parameters
  //$post['student']['captcha_code'] = $_POST['captcha_code'];
  $args = $_POST;

  $subadmin = new StudentRegistration($args);
  //print_r($subadmin);

  $result = $subadmin->save();

  if($result === true) {
    $new_id = $subadmin->id;
    // write to a log file
    $logger->get_activity_logger('NEW ACCOUNT','The new student was created successfully with ID ='. $new_id . ' on '.date("j F Y, g:i:s A"));
    $session-> message('Student was created successfully.');
    $session->login($subadmin);

    //$poped_error = array_pop($subadmin);
    //$success_array = array('result'=> $subadmin);
    unset($subadmin);
    echo json_encode(array('registration' => true, 'script_loadtime' => $_SESSION['script_loadtime'] ?? ''));
    
    // reset/re-initialize object values.
    // so after creating account succesfully, it will not print the values in the form.
    // TODO : if you are redirecting to another page after creating an account then don't
    // need to reset the object (you can comment given below code).
    //$subadmin = new SubAdmin;

    //redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
   
  } else {
    // show errors
    // sending whole object including errors beacuse we have to save the previous filled data by users.
    $errors_array = array('errors'=> $subadmin->errors, 'registration' => false, 'script_loadtime' => $_SESSION['script_loadtime'] ?? '');
    echo json_encode($errors_array);
  }
    }else{
        $subadmin = new StudentRegistration;
}
 ?>