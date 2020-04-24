<?php
class StudentAllotmentDetails extends DatabaseObject
{
    protected static $table_name = "AllotmentDetails";
    protected static $db_columns = ['id', 'YearOfAdmission','Type', 'AllotedBranch', 'AllotedCategory', 'AllotedSubCategory','AllotedRollNo','fk_id','IsFill'];

    public $id;
    public $YearOfAdmission;
    public $Type;
    public $AllotedBranch;
    public $year_batch= array();
    public $AllotedCategory;
    public $AllotedSubCategory;
    public $AllotedRollNo;
    protected $fk_id;
    protected $IsFill;
    public $captcha;
    public $email;
    // we are initializing '$required' from '$db_columns' in is_blank() function.
    public $required;
    public $update=['update'=>false];

    // CAUTION : don't try to renamed 'IsFill' as 'isfill'
    // values must be same as defined in $db_columns.
    private $exclude = ['id','IsFill','fk_id'];

    // For checking values of select tag (<select><option></option></select>).
    // values of array must be same as name of the property.
    // Array order must be also same as defined constant.

     private $properties = array('YearOfAdmission','Type', 'AllotedBranch', 'AllotedCategory', 'AllotedSubCategory');
    private $defined_constant = array('year_batch','TYPE', 'BRANCH', 'CATEGORY', 'SUBCATEGORY');
    //private $properties = array('Type', 'AllotedBranch', 'AllotedCategory', 'AllotedSubCategory');

    // private $defined_constant = array('TYPE', 'BRANCH', 'CATEGORY', 'SUBCATEGORY');

    // '$combine' is an array;
    // In '$combine', '$properties' values used as 'key' and
    // values of '$defined_constant' used as 'value'.
    private $combine = array();
    public const TYPE = ['1st Year', '2nd Year Lateral-Entry'];

    public const BRANCH = ['Computer science', 'Electronics', 'Information technology', 'Bio technology', 'Chemical'];
    public const CATEGORY = ['OBC', 'GENERAL', 'SC', 'ST'];
    public const SUBCATEGORY = ['OBC','SC'];
    // required parameters which must not be blank.
    // if anything is blank then it will populate 'can not blank' error
    //public const REQUIRED_PARAMS = ['YearOfAdmission','AllotedBranch','AllotedCategory','AllotedSubCategory','AllotedRollNo'];

    public function __construct($args=[])
    {
        global $session;
        $this->YearOfAdmission = $args['YearOfAdmission'] ?? '';
        $this->Type = $args['type'] ?? '';
        $this->AllotedBranch = $args['AllotedBranch'] ?? '';
        $this->AllotedCategory = $args['AllotedCategory'] ?? '';
        $this->AllotedSubCategory = $args['AllotedSubCategory'] ?? '';
        $this->AllotedRollNo = $args['AllotedRollNo'] ?? '';
        $this->email = $session->email ?? '';
        $this->set_year();
        $this->fk_id = $session->get_id();

        /**/
        $this->combine=array_combine($this->properties, $this->defined_constant);
    }

    private function set_year()
    {
        $current_year = idate('Y');
        $start_year = $current_year - 8;
        for ($year=$current_year; $year >= $start_year; $year--) {
            $this->year_batch[]=$year;
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
        // becasue values of select tag can be change by the developer mode.
        // Those changed values can easly be stored in database.
        // So, this is very important step to use.
        // This step is mainly for hackers or other users who have malicious intension.

        foreach ($this->properties as $property) {
            //checking constant is defined or NOT
            if (defined("self::".$this->combine[$property])) {
                // $set will be an array
                $set = constant("self::".$this->combine[$property]);
                if (has_exclusion_of($this->$property, $set, $case_insensitive=false)) {
                    $this->errors[] = "'".$this->$property."'" .' is not valid value for ' . ucfirst($property);
                }
            }elseif($property == 'YearOfAdmission'){
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

        switch ($this->update['update']) {
            case false:
                if (!is_blank($this->AllotedRollNo) && $this->has_uniqueness($this->AllotedRollNo, 'AllotedRollNo') === false) {
            $this->errors[] = $this->AllotedRollNo . ' roll_number has already registered.';
        }
                break;

            case true:
            $sql = "SELECT * FROM " . static::$table_name . " ";
            $sql .= "WHERE AllotedRollNo ='" . self::$database->escape_string($this->update['AllotedRollNo']) . "' ";
 
            $record = static::find_by_sql_without_object($sql);
            // print_r($record);

            if(($record['AllotedRollNo'] == $this->update['AllotedRollNo']) && ($record['fk_id']) != $this->fk_id){
                    $this->errors[] = $this->AllotedRollNo . ' roll_number has already registered.';
            } // if
                
                break;
            
            default:
                # code...
                break;
        } // switch

        if(!is_blank($this->AllotedRollNo)){
            intval($this->AllotedRollNo);
        }
        if (empty($this->errors)) {
            $this->IsFill = 1;
        }

        return $this->errors;
    } //validate()
}
