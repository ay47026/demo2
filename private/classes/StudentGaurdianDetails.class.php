<?php
class StudentGaurdianDetails extends DatabaseObject
{
    protected static $table_name = "GaurdianDetails";
    protected static $db_columns = ['id', 'FirstName', 'LastName','GaurdianRelation','GaurdianOccupation','GaurdianMobileNo', 'GaurdianEmail', 'GaurdianMonthlyIncome','CorrespondenceAddress', 'PermanentAndCorrespondingAddSame', 'GaurdianOfficeAdd','GaurdianPanNo','IsFill','fk_id'];

    public $id;
    public $FirstName;
    public $LastName;
    public $GaurdianRelation;
    public $GaurdianOccupation;
    public $GaurdianMobileNo;
    public $GaurdianEmail;
    public $GaurdianMonthlyIncome;
    public $CorrespondenceAddress;
    public $PermanentAndCorrespondingAddSame;
    public $GaurdianOfficeAdd;
    public $GaurdianPanNo;
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
    private $properties = array('GaurdianRelation');

    private $defined_constant = array('GAURDIAN_RELATION');
    // '$combine' is an array;
    // In '$combine', '$properties' values used as 'key' and
    // values of '$defined_constant' used as 'value'.
    private $combine = array();

    public const GAURDIAN_RELATION = ['Father', 'Mother', 'Uncle', 'Aunty'];

    public function __construct($args=[])
    {
        global $session;
        $this->FirstName = $args['FirstName'] ?? '';
        $this->LastName = $args['LastName'] ?? '';
        $this->GaurdianRelation = $args['GaurdianRelation'] ?? '';
        $this->GaurdianOccupation = $args['GaurdianOccupation'] ?? '';
        $this->GaurdianMobileNo = $args['GaurdianMobileNo'] ?? '';
        $this->GaurdianEmail = $args['GaurdianEmail'] ?? '';
        $this->GaurdianMonthlyIncome = $args['GaurdianMonthlyIncome'] ?? '';
        $this->CorrespondenceAddress = $args['CorrespondenceAddress'] ?? '';
        $this->PermanentAndCorrespondingAddSame = $args['PermanentAndCorrespondingAddSame'] ?? '';
        $this->GaurdianOfficeAdd = $args['GaurdianOfficeAdd'] ?? '';
        $this->GaurdianPanNo = $args['GaurdianPanNo'] ?? '';
        $this->IsFill = $args['IsFill'] ?? '0';
        $this->fk_id = $session->get_id();
        $this->email = $session->email ?? '';

        /* Used in validation for select tag */
        $this->combine=array_combine($this->properties, $this->defined_constant);
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
            } //if
        } //foreach
    } //check_option_value()

    protected function validate()
    {
        // At the very first, reset all errors
        $this->errors = [];
        $this->is_blank();

        if(empty($this->errors)){
            number_format($this->GaurdianMonthlyIncome,2);
            intval($this->GaurdianPanNo);
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
