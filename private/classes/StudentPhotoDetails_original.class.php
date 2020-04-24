<?php
class StudentPhotoDetails extends DatabaseObject
{
    protected static $table_name = "PhotoSign";
    protected static $db_columns = ['id', 'Photo', 'Sign','IsFill','fk_id'];

    public $id;
    public $Photo;
    public $Sign;
    protected $IsFill;
    protected $fk_id;

    // we'are initialize '$required' from '$db_columns' in is_blank() function.
    public $required;

    // CAUTION : don't try to renamed 'IsFill' as 'isfill'
    // values must be same as defined in $db_columns.
    private $exclude = ['id','IsFill','fk_id','Sign'];
    //the above properties are used for DB.

    //given below properties for image processing
    protected $destination = PUBLIC_PATH . '/student/uploads/';
    protected $messages = array();
    protected $maxSize = 51200;
    protected $permittedTypes = array(
            'image/jpeg',
            'image/pjpeg',
            'image/gif',
            'image/png'
    );
    protected $newName;
    protected $renameDuplicates;
    

    public function __construct($args=[])
    {
        global $session;
        $this->Photo = $args['Photo'] ?? '';
        $this->Sign = $args['Sign'] ?? '';
        // $this->destination = $args['upload_folder'];
        $this->fk_id = $session->get_id();

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

    //---------------------------------------
    //=====))) LYNDA--LYNDA
    //---------------------------------------

    public function get_file_name(){
        return $this->newName;
    }
    public function setMaxSize($bytes)
    {
        $serverMax = self::convertToBytes(ini_get('upload_max_filesize'));
        if ($bytes > $serverMax) {
            throw new Exception('Maximum size cannot exceed server limit for individual files: ' .
    self::convertFromBytes($serverMax));
        }
        if (is_numeric($bytes) && $bytes > 0) {
            $this->maxSize = $bytes;
        }
    }
    
    public static function convertToBytes($val)
    {
        $val = trim($val);
        $last = strtolower($val[strlen($val)-1]);
        if (in_array($last, array('g', 'm', 'k'))){
                    // Explicit cast to number
                    $val = (float) $val;
            switch ($last) {
                case 'g':
                    $val *= 1024;
                case 'm':
                    $val *= 1024;
                case 'k':
                    $val *= 1024;
            }
        }
        return $val;
    }
    
    public static function convertFromBytes($bytes)
    {
        $bytes /= 1024;
        if ($bytes > 1024) {
            return number_format($bytes/1024, 1) . ' MB';
        } else {
            return number_format($bytes, 1) . ' KB';
        }
    }
    
    
    public function upload($renameDuplicates = true)
    {
        $this->renameDuplicates = $renameDuplicates;
        $uploaded = current($_FILES);
        foreach ($_FILES as $file) {
        print_r($file);
        if ($this->checkFile($file)) {
            $this->moveFile($file);
        }
            
        }
        // exit;
    }

    
    public function getMessages()
    {
        return $this->messages;
    }
    
    protected function checkFile($file)
    {
        if ($file['error'] != 0) {
            $this->getErrorMessage($file);
            return false;
        }
        if (!$this->checkSize($file)) {
            return false;
        }
        if (!$this->checkType($file)) {
            return false;
        }
        $this->checkName($file);
        return true;
    }
    
    protected function getErrorMessage($file)
    {
        switch($file['error']) {
            case 1:
            case 2:
                $this->messages[] = $file['name'] . ' is too big: (max: ' . 
                self::convertFromBytes($this->maxSize) . ').';
                break;
            case 3:
                $this->messages[] = $file['name'] . ' was only partially uploaded.';
                break;
            case 4:
                $this->messages[] = 'No file submitted.';
                break;
            default:
                $this->messages[] = 'Sorry, there was a problem uploading ' . $file['name'];
                break;
        }
    }
    
    protected function checkSize($file)
    {
        if ($file['size'] == 0) {
            $this->messages[] = $file['name'] . ' is empty.';
            return false;
        } elseif ($file['size'] > $this->maxSize) {
            $this->messages[] = $file['name'] . ' exceeds the maximum size for a file ('
                    . self::convertFromBytes($this->maxSize) . ').';
            return false;
        } else {
            return true;
        }
    }
    
    protected function checkType($file) 
    {
        if (in_array($file['type'], $this->permittedTypes)) {
            return true;
        } else {
            $this->messages[] = $file['name'] . ' is not permitted type of file.';
            return false;
        }
    }

    protected function checkName($file)
    {
        $this->newName = null;
        $nospaces = str_replace(' ', '_', $file['name']);
        if ($nospaces != $file['name']) {
            $this->newName = $nospaces;
        }
        $nameparts = pathinfo($nospaces);
        $extension = isset($nameparts['extension']) ? $nameparts['extension'] : '';

        if ($this->renameDuplicates) {
            $name = isset($this->newName) ? $this->newName : $file['name'];
            $existing = scandir($this->destination);
            if (in_array($name, $existing)) {
                $i = 1;
                do {
                    $this->newName = $nameparts['filename'] . '_' . $i++;
                    if (!empty($extension)) {
                        $this->newName .= ".$extension";
                    }
                } while (in_array($this->newName, $existing));
            }
        }
    }

    public function temp(){
        return 'I am from child class...';
    }

    
    protected function moveFile($file)
    {
        $filename = isset($this->newName) ? $this->newName : $file['name'];
        $success = move_uploaded_file($file['tmp_name'], $this->destination . $filename);
        if ($success) {
            $result = $file['name'] . ' was uploaded successfully';
            if (!is_null($this->newName)) {
                $result .= ', and was renamed ' . $this->newName;
                // this step is very important because
                // if the filename was renamed then the renamed value must be submited to DB.
                $this->Photo = $this->newName;
            }
            $result .= '.';
            $this->messages[] = $result;
        } else {
            $this->messages[] = 'Could not upload ' . $file['name'];
        }
    }
}
