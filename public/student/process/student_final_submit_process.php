<?php
// simulate a slow server...
sleep(1);

function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
// if this is not AJAX request then stop executing.
if(!is_ajax_request()) { exit; }


require_once('../../../private/initialize.php');
//******************************
// If return false then exit PHP execution and redirect to login_page via javascript.
// =>we can't redirect through php-ajax that's why we need to redirect in JS.
//******************************
ajax_require_login();

if (is_post_request()) {
    // Create record using post parameters

    $args = $_POST;
      // print_r($args);
    // exit;
    
    $subadmin = new StudentFinalSubmit($args);

    $result = $subadmin->save();
    // print_r($subadmin);
  // exit;


    if ($result === true) {

        $new_id = $subadmin->id;
        // write to a log file
        $logger->get_activity_logger('Final submit Details', 'Final submit was successfully done with ID ='. $new_id . ' on '.date("j F Y, g:i:s A") . ' by ' . $session->get_id());

        echo json_encode('data_added');

   
    } else {
        // show errors
        // sending errors.
        $errors_array = array('errors'=> $subadmin->errors);
        echo json_encode($errors_array);
    }
}else{

  $today =  date("d/m/Y");
  $final_submit = new StudentFinalSubmit;
  $f_name = $final_submit->get_full_name();
  $data= array('FullName'=> $f_name, 'date' => $today);
  echo json_encode($data);
}
 ?>