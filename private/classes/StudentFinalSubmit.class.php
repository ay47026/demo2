<?php
class StudentFinalSubmit extends DatabaseObject
{
    protected static $table_name = "FinalSubmitDetails";
    protected static $db_columns = ['id', 'FirstName', 'LastName' , 'agree', 'date','time','fk_id','IsFill'];

    public $id;
    public $FirstName;
    public $LastName;
    public $aree;
    public $date;
    public $time;
    protected $fk_id;
    protected $IsFill;

    public $required;

    // CAUTION : don't try to renamed 'IsFill' as 'isfill'
    // values must be same as defined in $db_columns.
    private $exclude = ['id','FirstName', 'LastName','IsFill','fk_id'];

    // For checking values of select tag (<select><option></option></select>).
    // values of array must be same as name of the class property.
    

    public const AGREE = 'yes';

    // '$combine' is an array;
    // In '$combine', '$properties' values used as 'key' and
    // values of '$defined_constant' used as 'value'.
    private $combine = array();


    public function __construct($args=[])
    {
        global $session;
        $this->agree = $args['agree'] ?? '';
        $this->date = date('Y-m-j');
        $this->time = date('h:m:s');
        $this->set_name();
        $this->set_agree();

        $this->fk_id = $session->get_id();

    }
    

    // getting firstname, last name as full name from personal_details_table of database.
    public function get_full_name()
    {
        global $session;
        $fk_id = $session->get_id();
        $sql = "SELECT FirstName,LastName FROM PersonalDetails ";
        $sql .= "WHERE fk_id='" . $fk_id . "'";

        $record = static::find_by_sql_without_object($sql);

        return $record;
    }

    private function set_name()
    {
        $get_name = $this->get_full_name();
        $this->FirstName = $get_name['FirstName'];
        $this->LastName = $get_name['LastName'];
    }

    private function set_agree()
    {
        if(has_presence($this->agree)){
        switch ($this->agree) {
            case 'yes':
                $this->agree = 1;
                break;
            
            default:
                $this->errors[]='incorrect value for agree....(hacking attempt !)';
                break;
        }

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
        
    }


    protected function validate()
    {
        // At the very first, reset all errors
        // $this->errors = [];
        $this->is_blank();

        if (empty($this->errors)) {
            $this->IsFill = 1;
        }

        return $this->errors;
    } //validate()


}
