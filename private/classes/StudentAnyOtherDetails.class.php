<?php
class StudentAnyOtherDetails extends DatabaseObject
{
    protected static $table_name = "BankDraftDetails";
    protected static $db_columns = ['id', 'AmountDepositedInRs', 'SerialNumberOfDD', 'NameOfIssuerBank', 'Date', 'fk_id', 'fk_id_feeDetails', 'IsFill'];

    public $id;
    public $AmountDepositedInRs;
    public $SerialNumberOfDD;
    public $NameOfIssuerBank;
    public $Date;

    protected $fk_id;
    protected $fk_id_feeDetails;
    protected $IsFill;
    // we'are initialize '$required' from '$db_columns' in is_blank() function.
    public $required;

    // CAUTION : don't try to renamed 'IsFill' as 'isfill'
    // values must be same as defined in $db_columns.
    private $exclude = ['id','IsFill','fk_id', 'fk_id_feeDetails'];

    public function __construct($args=[])
    {
        global $session;

        $this->AmountDepositedInRs = $args['AmountDepositedInRs'] ?? '';
        $this->SerialNumberOfDD = $args['SerialNumberOfDD'] ?? '';
        $this->NameOfIssuerBank = $args['NameOfIssuerBank'] ?? '';
        // According to mysql DATE format : YYYY-MM-DD
        $this->Date =  date("Y-m-j");

        $this->IsFill = $args['IsFill'] ?? '0';
        $this->fk_id = $session->get_id();
        $this->fk_id_feeDetails = $this->fk_id;
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
        $this->errors = [];
        $this->is_blank();

        if (empty($this->errors)) {
            $this->IsFill = 1;
        }

        return $this->errors;
    }
}
