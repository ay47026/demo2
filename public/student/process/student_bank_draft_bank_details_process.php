<?php
// simulate a slow server...
sleep(1);

function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
// if this is not AJAX request then stop executing.
if(!is_ajax_request()) { exit; }

require_once('../../../private/initialize.php');

ajax_require_login();

if(is_post_request()){

  $args = $_POST;
  $fk_id = $session->get_id();
  $bank_draft = StudentBankDraftDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
  if($bank_draft == false){
    // echo 'NOT MERGED' . PHP_EOL;
    $bank_draft = new StudentBankDraftDetails($args);
    // There're 4 banking related tables which're all connected by `foreign key`
    // to a common table named as 'FeeDetails'.
    // so Before adding data in one of the 4 tables, I am adding data to its parent 
    // table (which is 'FeeDetails') and after adding data in FeeDetails then
    // I am adding the data in one of the 4 tables.
    $fee_details = new StudentFeeDetails(['type'=>$bank_draft::get_table_name()]);
    $fee_details->save();
  }else{
    // echo 'merged' . PHP_EOL;
    $bank_draft->merge_attributes($args);
  }

  $result = $bank_draft->save();
  //echo $bank_draft->id ?? 'ID NOT SET YET' .PHP_EOL;
  //print_r($bank_draft);
  // exit;

  if($result === true) {
    $new_id = $bank_draft->id;
    // write to a log file
    $logger->get_activity_logger('Bank-Draft --BANK-- Details','Bank-Draft details was successfully filled with ID ='. $new_id . ' on '.date("j F Y, g:i:s A") . ' by ' . $session->get_id());
    //$session-> message('Personal Details was created successfully.');

    //$poped_error = array_pop($bank_draft);
    //$success_array = array('result'=> $bank_draft);
    echo json_encode('data_added');
    
    // reset/re-initialize object values.
    // so after creating account succesfully, it will not print the values in the form.
    // TODO : if you are redirecting to another page after creating an account then don't
    // need to reset the object (you can comment given below code).
    //$bank_draft = new bank_draft;   
  } else {
    // show errors
    // sending errors.
    $errors_array = array('errors'=> $bank_draft->errors);
    echo json_encode($errors_array);
  }
    }/*else{
        $bank_draft = new StudentRegistration;
}*/
 ?>