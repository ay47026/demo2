<?php
// simulate a slow server...
sleep(2);

function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
// if this is not AJAX request then stop executing.
if(!is_ajax_request()) { exit; }


require_once('../../../private/initialize.php');
ajax_require_login();

if(is_post_request()){

  // Create record using post parameters
  //$post['student']['captcha_code'] = $_POST['captcha_code'];
  $args = $_POST;

    //*****
    //code for updating the table (UPDATIION CODE)
    //*****
    $fk_id = $session->get_id();
    $subadmin = StudentPersonalDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);

    if($subadmin == false){
        $subadmin = new StudentPersonalDetails($args);
  }else{
        $subadmin->merge_attributes($args);
  }

  $result = $subadmin->save();

  if($result === true) {
    $new_id = $subadmin->id;
    // write to a log file
    $logger->get_activity_logger('Personal Details','Personal Details was successfully filled by ID ='. $new_id . ' on '.date("j F Y, g:i:s A") . ' by ' . $session->get_id());
    //$session-> message('Personal Details was created successfully.');

    //$poped_error = array_pop($subadmin);
    //$success_array = array('result'=> $subadmin);
    echo json_encode('data_added');
    
    // reset/re-initialize object values.
    // so after creating account succesfully, it will not print the values in the form.
    // TODO : if you are redirecting to another page after creating an account then don't
    // need to reset the object (you can comment given below code).
    //$subadmin = new SubAdmin;   
  } else {
    // show errors
    // sending errors.
    $errors_array = array('errors'=> $subadmin->errors);
    echo json_encode($errors_array);
  }
    }/*else{
        $subadmin = new StudentRegistration;
}*/
 ?>