<?php

class StudentRegistration extends DatabaseObject {

  static protected $table_name = "student_registration";
  static protected $db_columns = ['id', 'student_name', 'roll_no', 'email', 'mobile_no','hashed_password'];

public $id;
public $student_name;
public $email;
public $mobile_no;
public $roll_no;
public $date_of_reg;
public $password;
protected $hashed_password;
protected $confirm_password;
public $captcha;
protected $password_required = true;


 // public const GENDER = ['Mens', 'Womens', 'Unisex'];

  // Funcion __construct() will automatically get called when an object is created of the particular class.  
  // Put lowercase values in DB that is why strtolower is used here.
  // I'm NOT using strtolower() for select (means have options to user) attributes like gender.
  // gender has options like 'Womens', 'Mens', 'Unisex'.
  // If you want to use strtolower() for select attributes then you have to pass `$case_insensitive=true`
  // in has_exclusion_of().
  // has_exclusion_of() function is using in validation (which is using in this file).
  public function __construct($args=[]) {
    $this->student_name = isset($args['student_name']) ? strtolower($args['student_name']): '';
    
    $this->email = isset($args['email'])? strtolower($args['email']) : '';
    $this->mobile_no = $args['mobile_no'] ?? '';
    $this->roll_no = $args['roll_no'] ?? '';
    //$this->date_of_reg = date("d/m/Y");
    $this->password=$args['password'] ?? '';
    $this->captcha=$args['captcha_code'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? ''; 
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

 protected function create() {
    $this->set_hashed_password();
    return parent::create();
  }

  protected function update() {
    if($this->password != '') {
      $this->set_hashed_password();
      // validate password
    } else {
      // password not being updated, skip hashing and validation
      $this->password_required = false;
    }
    return parent::update();
  }

  protected function validate() {
    
    // At the very first, reset all errors
    $this->errors = [];

     /* For first name ---------*/
    if(is_blank($this->student_name)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->student_name, array('min' => 3, 'max' => 15))) {
      $this->errors[] = "First name must be between 3 and 15 characters.";
    } elseif (!has_valid_name_format($this->student_name)) {
      $this->errors[] = "You can use only Alphabet for First Name.";
    }

    
     /* For email ---------*/
    if(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be in a valid format.";
    } elseif (!has_length($this->email, array('max' => 255))) {
      $this->errors[] = "Email must be less than 255 characters.";
    } elseif ($this->has_uniqueness($this->email,'email') === false) {
      $this->errors[] = "This email ({$this->email}) has already registered. Please try another one !";
      }

    /* For mobile number ---------*/
    if(is_blank($this->mobile_no)) {
      $this->errors[] = "mobile_number cannot be blank.";
    }elseif ($this->has_uniqueness($this->mobile_no,'mobile_no') === false) {
      $this->errors[] = $this->mobile_no . " mobile_number has already registered.";
    } elseif (!has_length_exactly($this->mobile_no, 10)) {
      $this->errors[] = "mobile_number must be of 10 digits.";
    } elseif (!is_valid_mobile_number($this->mobile_no)) {
      $this->errors[] = "You can only use numbers(0-9) for mobile number.";
     }

     /* For roll number ---------*/
    if(is_blank($this->roll_no)) {
      $this->errors[] = "roll_number cannot be blank.";
    }elseif ($this->has_uniqueness($this->roll_no,'roll_no') === false) {
      $this->errors[] = $this->roll_no . " roll_number has already registered.";
    }

       


    /*if($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }*/

      /*if($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }*/

      if($this->password_required) {
      if(is_blank($this->password) || is_blank($this->confirm_password)) {
        $this->errors[] = "Password/confirm_password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 4))) {
        $this->errors[] = "Password must contain 4 or more characters";
      } elseif ($this->password !== $this->confirm_password) {
        $this->errors[] = "Password and confirm password must match.";
      }elseif (strlen($this->captcha) >6 ) {
        $this->errors[] = "ohoo wrong captcha.";
      }
    }

 

  // checking for captcha
  if (empty($this->errors)) {  
    $this->captcha_checking();
  }

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


  // For AJAX
  public function align_table_columns($set=[])
  {
    
  }

}

?>