<?php
/**
 * Checking how many tables of student_details like AllotmentDetails,PersonalDetails have filled.
 */
class CheckAllStudentDetail extends DatabaseObject
{
protected static $table_name  = array('AllotmentDetails', 'PersonalDetails', 'PhotoSign', 'LastEducationDetails', 'FeeDetails' ,'GaurdianDetails', 'FinalSubmitDetails');
protected $checking = array();

public function checking(){
	global $session;

	foreach (self::$table_name as $value) {
        $sql = "SELECT IsFill FROM $value ";
        $sql .= "WHERE fk_id='" . $session->get_id() . "'";
        $data = self::$database->query($sql);
        //getting only YearOfAdmission
        $record = $data->fetch_assoc();
        $data->free();
        $result = $record['IsFill'];
        // insterting false which has not filled.
        $this->checking[$value] = $result ?? false;
        if($value == 'FeeDetails' && $this->checking['FeeDetails'] == 1){
        $this->checking['fee_type'] = $this->which_fee_detail()['Type'];
        }
	}
        return $this->checking;
}

public function which_fee_detail(){
        global $session;

        $sql = "SELECT * FROM FeeDetails ";
        $sql .= "WHERE fk_id='" . $session->get_id() . "'";
        $result = self::$database->query($sql);
        $record = $result->fetch_assoc();
        $result->free();
        return $record;

}
}
?>