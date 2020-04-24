<?php
class StudentFeeDetails extends DatabaseObject
{
    protected static $table_name = "FeeDetails";
    protected static $db_columns = ['id', 'Type', 'IsFill','fk_id'];

    public $id;
    protected $Type;

    protected $IsFill;
    protected $fk_id;

    public function __construct($args=[])
    {
        global $session;

        $this->Type = $args['type'] ?? '';
        
        $this->IsFill = 1;
        $this->fk_id = $session->get_id();
    }

}
