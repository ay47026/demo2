<?php
class StudentEducationDetails extends DatabaseObject
{
    protected static $table_name = "LastEducationDetails";
    protected static $db_columns = ['id', 'NameOfSchoolLastAttended', 'ExamPass', 'YearOfPassing', 'RollNumber','MaximumMarks','MarksObtained','PercentOfMarksObtained','IsFill','fk_id'];

    public $id;
    public $NameOfSchoolLastAttended;
    public $ExamPass;
    public $YearOfPassing;
    public $bound_year = array();
    public $RollNumber;
    public $MaximumMarks;
    public $MarksObtained;
    public $PercentOfMarksObtained;
    protected $IsFill;
    protected $fk_id;
    public $email;

    // we'are initialize '$required' from '$db_columns' in is_blank() function.
    public $required;

    // CAUTION : don't try to renamed 'IsFill' as 'isfill'
    // values must be same as defined in $db_columns.
    private $exclude = ['id','IsFill','fk_id'];

    // For checking values of select tag (<select><option></option></select>).
    // values of array must be same as name of the class property.
    private $properties = array('ExamPass', 'YearOfPassing');

    private $defined_constant = array('EXAM_PASS', 'bound_year');
    // '$combine' is an array;
    // In '$combine', '$properties' values used as 'key' and
    // values of '$defined_constant' used as 'value'.
    private $combine = array();

    public const EXAM_PASS = ['Intermediate (10+2)', 'Diloma', 'Bsc'];

    public function __construct($args=[])
    {
        global $session;
        $this->NameOfSchoolLastAttended = $args['NameOfSchoolLastAttended'] ?? '';
        $this->ExamPass= $args['ExamPass'] ?? '';
        $this->RollNumber = $args['RollNumber'] ?? '';
        $this->MaximumMarks = $args['MaximumMarks'] ?? '';
        $this->MarksObtained = $args['MarksObtained'] ?? '';
        $this->PercentOfMarksObtained = $args['PercentOfMarksObtained'] ?? '';
        $this->YearOfPassing = $args['YearOfPassing'] ?? '';
        
        $this->IsFill = $args['IsFill'] ?? '0';
        $this->set_year_of_passing();
        $this->fk_id = $session->get_id();
        $this->email = $session->email ?? '';

        /* Used in validation for select tag */
        $this->combine=array_combine($this->properties, $this->defined_constant);
    }

    // finding year_of_admission from allotement_table of database.
    private function get_year_of_addmission()
    {
        global $session;
        $sql = "SELECT YearOfAdmission FROM AllotmentDetails ";
        $sql .= "WHERE fk_id='" . $session->get_id() . "'";
        $data = self::$database->query($sql);
        //getting only rYearOfAdmission
        $record = $data->fetch_assoc();
        return $record['YearOfAdmission'];
    }

    private function set_year_of_passing()
    {
        $year_of_admission = $this->get_year_of_addmission();
        $up_to_year = $year_of_admission - 8;
        for ($year=$up_to_year; $year <= $year_of_admission; $year++) {
            $this->bound_year[]=$year;
        }
    }


    
    public function is_blank()
    {
        $this->required = array_diff(self::$db_columns, $this->exclude);
        foreach ($this->required as $value) {
            // checking class properties for blank OR not blank.
            if (is_blank($this->$value)) {
                $this->errors[] = $value . ' cannot be blank.';
            }
        } //foreach
        if(empty($this->errors)){
        $this->check_option_value();
        }
    }

    public function check_option_value()
    {
        /* Checking values for select tag (<select><option></option></select>). ---------*/
        // beacasue values of select tag can be change by the developer mode.
        // those changed values instead of original values can be sent to process and can be easly stored in database.
        // so this is also very important step to see.
        // this step is mainly for hackers or other users who have malicious intension.

        foreach ($this->properties as $property) {
            //checking constant is defined or NOT
            if (defined("self::" . $this->combine[$property])) {
                // $set will be an array
                $set = constant("self::".$this->combine[$property]);
                if (has_exclusion_of($this->$property, $set, $case_insensitive=false)) {
                    $this->errors[] = "'".$this->$property."'" .' is not valid value for ' . ucfirst($property);
                }
            } elseif($property == 'YearOfPassing'){
                $set = $this->combine[$property];
                $set = $this->$set; // $set will be an array
                if (has_exclusion_of($this->$property, $set, $case_insensitive=false)) {
                    $this->errors[] = "'".$this->$property."'" .' is not valid value for ' . ucfirst($property);
                }
                
            } //elseif
        } //foreach
    } //check_option_value()

    protected function validate()
    {
        // At the very first, reset all errors
        $this->errors = [];
        $this->is_blank();

         if(empty($this->errors)){
            number_format($this->MarksObtained,2);
            intval($this->RollNumber);
            intval($this->MaximumMarks);
        }
        if(!is_blank($this->PercentOfMarksObtained)){
            $find_me = '%';
            if(strpos($this->PercentOfMarksObtained, $find_me) !==false){
                $this->PercentOfMarksObtained = str_replace($find_me, '', $this->PercentOfMarksObtained);
            }
            number_format($this->PercentOfMarksObtained,2);
        }

        if (empty($this->errors)) {
            $this->IsFill = 1;
        }

        return $this->errors;
    }


    public static function find_by_username($username)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }

    public static function find_by_email($username)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE student_email='" . self::$database->escape_string($username) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }
}
