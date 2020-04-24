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

  function move_file(){
    global $subadmin, $result, $args;

    $max = $args['MAX_FILE_SIZE'];
    $subadmin->setMaxSize($max);
    $subadmin->upload();
    $result = $subadmin->getMessages();
  }

  //*****
  //code for updating the table (UPDATIION CODE)
  //*****
  $fk_id = $session->get_id();
  $subadmin = StudentPhotoDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);

  if($subadmin == false){
    // echo 'NOT merged';

  $subadmin = new StudentPhotoDetails($args);
  move_file();
  }else{
    // echo 'merged';
      $subadmin->merge_attributes($args);
      move_file();
    }

  

//   if ($result) {
//   foreach ($result as $message) {
//     echo "<li>$message</li>";
// }
// }


  //print_r($args);
  // echo PHP_EOL;
  // echo '-------------ERRRORRSS--------------------------------------subadmin[]';
  // print_r($subadmin->errors);
  // echo PHP_EOL;
$result = $subadmin->save();
// echo $result ? 'true': 'false'.PHP_EOL;
// exit;

  if($result === true) {
     $new_id = $subadmin->id;
     // write to a log file
     $logger->get_activity_logger('Gaurdian Details','Gaurdian Details was successfully filled by ID ='. $new_id . ' on '.date("j F Y, g:i:s A") . ' by ' . $session->get_id());
    
    echo json_encode('data_added');
     
  } else {
    
    $errors_array = array('errors'=> $subadmin->errors);
    echo json_encode($errors_array);
  }
    }
 ?>