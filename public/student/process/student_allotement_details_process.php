
<?php
// simulate a slow server...
sleep(2);

function is_ajax_request()
{
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
// if this is not AJAX request then stop executing.
if (!is_ajax_request()) {
    exit;
}


require_once('../../../private/initialize.php');
//******************************
// If return false then exit PHP execution and redirect to login_page via javascript.
// =>we can't redirect through php-ajax that's why we need to redirect in JS.
//******************************
ajax_require_login();

if (is_post_request()) {
    // Create record using post parameters
    //$post['student']['captcha_code'] = $_POST['captcha_code'];
    $args = $_POST;
    //*****
    //code for updating the table (UPDATIION CODE)
    //*****
    $fk_id = $session->get_id();
    $subadmin = StudentAllotmentDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);

    if($subadmin == false){
        // echo 'NOT MERGE'.PHP_EOL;
    $subadmin = new StudentAllotmentDetails($args);
  }else{
        // echo 'MERGED'.PHP_EOL;
        $subadmin->update=['update'=>true, 'AllotedRollNo'=>$args['AllotedRollNo']];
        $subadmin->merge_attributes($args);
  }


    $result = $subadmin->save();
  //   print_r($subadmin);
  // exit;


    if ($result === true) {
        $education_details = new StudentEducationDetails;
        $new_id = $subadmin->id;
        // write to a log file
        $logger->get_activity_logger('Allotement Details', 'Allotement Details was successfully filles with ID ='. $new_id . ' on '.date("j F Y, g:i:s A") . ' by ' . $session->get_id());

        // $session-> message('Allotement details was created successfully.');
        //$session->set_id($new_id);

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
}
//  else {
//     $subadmin = new StudentRegistration;
// }
 ?>
