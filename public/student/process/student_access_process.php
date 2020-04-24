<?php
// simulate a slow server...
//sleep(1);

function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
// if this is not AJAX request then stop executing.
if(!is_ajax_request()) { exit; }
require_once('../../../private/initialize.php');


if (is_get_request()) {

$check = new CheckAllStudentDetail;
$data = $check->checking();
$default = 0;
foreach ($data as $key => $value) {
	// it means any table data has not filled yet.
	// then enable the first table which is allotment details;

	$table_name = $key; // IMP:=> don't move this line of code from here
	if($value !=1 && $default == 0){
		$table_name = $key;
		break;
	}
	if($key == 'fee_type'){
		continue;
	}
	if($value != 1){
		break;
	}
	if($key == 'PhotoSign' && $value == 1){
		$fk_id = $session->get_id();
		$photo_details = StudentPhotoDetails::find_by_attribute($set = ['attribute' => 'fk_id', 'id' => $fk_id]);
		$photo_name = $photo_details->Photo;
		$signature_name = $photo_details->Sign;
	}

	$default++;
	if($default ==6){
		$table_name = 'FinalSubmit';
	}
}

//send an green image
$green_image = url_for('/images/success_green.png');
if(isset($photo_name) && isset($signature_name)){
$send_data = array('has_access' => $data, 'default' => $default, 'uploads_path' => url_for('/student/uploads/') , 'table_name' => $table_name, 'success_image' => $green_image, 'signature_name' => $signature_name , 'photo_name' => $photo_name);

}else{
$send_data = array('has_access' => $data, 'default' => $default,  'table_name' => $table_name, 'success_image' => $green_image);
}
echo json_encode($send_data);
// json_encode('',$check->checking());

}

?>