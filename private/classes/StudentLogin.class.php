<?php

class StudentLogin extends DatabaseObject {

  static protected $table_name = "student_registration";
  static protected $db_columns = ['id', 'roll_no','email','hashed_password'];

public $id;
public $email;
public $roll_no;
public $password;
protected $hashed_password;
public $captcha;
protected $password_required = true;

  // Funcion __construct() will automatically get called when an object is created of the particular class.  
  // Put lowercase values in DB that is why strtolower is used here.
  // I'm NOT using strtolower() for select (means have options to user) attributes like gender.
  // gender has options like 'Womens', 'Mens', 'Unisex'.
  // If you want to use strtolower() for select attributes then you have to pass `$case_insensitive=true`
  // in has_exclusion_of().
  // has_exclusion_of() function is using in validation (which is using in this file).
  public function __construct($args=[]) {
   
    $this->roll_no = $args['roll_no'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password=$args['password'] ?? '';
    $this->captcha=$args['captcha_code'] ?? '';
  }

    public function captcha_checking(){
    $new = new Captcha;
    $code = $this->captcha;
    $result = $new->check_captcha($code);
    if ($result === false) {
      $this->errors[] = "Wrong captcha...Try Again !";
    }

  }

  public function full_name() {
    $full_name = $this->first_name . ' ' . $this->last_name;
    return ucwords($full_name);
  }

  protected function set_hashed_password() {
    $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verify_password($password) {
    return password_verify($password, $this->hashed_password);
  }
  public function get_errors() {
    return $this->validate();
  }
  

  protected function validate() {
    
    // At the very first, reset all errors
    $this->errors = [];

    /* For roll number ---------*/
    if(is_blank($this->roll_no)) {
      $this->errors[] = "roll_number cannot be blank.";
      
    }
     


    /* For Password ---------*/
    if($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 4))) {
        $this->errors[] = "Password must contain 4 or more characters";
      } elseif (strlen($this->captcha) > 6) {
        $this->errors[] = "ohoo wrong captcha.";
      }

  }
      // checking for cpatcha

  //TODO : re-enable after developement
  // if (empty($this->errors)) {  
  //   $this->captcha_checking();
  // }
    return $this->errors;
}


  static public function find_by_username($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
  static public function find_by_roll_no($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE roll_no='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static public function find_by_email($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE email='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

}

?>