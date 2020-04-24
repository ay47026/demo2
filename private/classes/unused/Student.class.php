<?php

class Student extends DatabaseObject {

  static protected $table_name = "student";
  static protected $db_columns = ['id', 'image', 'first_name', 'last_name', 'father_name','email','batch','first_mob_no','father_mob_no','gender','dob','year','disability_percentage','branch','disability','address','aktu_roll_no','academic_detail'];

public $id;
public $image;
public $first_name;
public $last_name;
public $father_name;
public $email; 
public $batch;
public $first_mob_no;
public $father_mob_no;
public $gender;
public $dob;
public $year;
public $disability_percentage;
public $branch;
public $disability;
public $address;
public $aktu_roll_no;
public $academic_detail;

// protected $password_required = true;


  public const YEAR = ['1st', '2nd', '3rd', '4th'];

  public const BRANCH = ['Computer science', 'Electronics', 'Information technology', 'Bio technology', 'Chemical'];

  public const GENDER = ['male', 'female', 'unisex'];
  public const DISABILITY = ['yes', 'no'];

  public function __construct($args=[]) {
    $this->image = $args['image'] ?? 'image.png';
    $this->first_name = $args['first_name'] ?? '';
    $this->last_name = $args['last_name'] ?? '';
    $this->father_name = $args['father_name'] ?? '';
    $this->email = $args['email'] ?? '@gmail.com';
    $this->batch = $args['batch'] ?? '2016';
    $this->first_mob_no = $args['first_mob_no'] ?? '';
    $this->father_mob_no = $args['father_mob_no'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->dob = $args['dob'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->disability_percentage = $args['disability_percentage'] ?? '';
    $this->branch = $args['branch'] ?? '';
    $this->disability = $args['disability'] ?? '';
    $this->address = $args['address'] ?? '';
    $this->aktu_roll_no = $args['aktu_roll_no'] ?? '';
    $this->academic_detail = $args['academic_detail'] ?? '';
  }

  public function full_name() {
    return $this->student_name . " | " . $this->student_branch;
  }

  /*protected function set_hashed_password() {
    $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verify_password($password) {
    return password_verify($password, $this->hashed_password);
  }*/

  // protected function create() {
  //   //$this->set_hashed_password();
  //   return parent::create();
  // }

  // protected function update() {
  //   if($this->password != '') {
  //     //$this->set_hashed_password();
  //     // validate password
  //   } else {
  //     // password not being updated, skip hashing and validation
  //     //$this->password_required = false;
  //   }
  //   return parent::update();
  // }


  // protected function validate() {
  //   $email_error = "<style>#s_email{border:1px solid red;}</style>";
  //   $email_default = "<style>#s_email{border:1px solid #a9a9a9;}</style>";

  //   $f_mobile_error = "<style>#f_mobile{border:1px solid red;}</style>";
  //   $f_mobile_default = "<style>#f_mobile{border:1px solid #a9a9a9;}</style>";

  //   $s_branch_error = "<style>#s_branch{border:1px solid red;}</style>";
  //   $s_branch_default = "<style>#s_branch{border:1px solid #a9a9a9;}</style>";

  //   $s_name_error = "<style>#s_name{border:1px solid red;}</style>";
  //   $s_name_default = "<style>#s_name{border:1px solid #a9a9a9;}</style>";

  //   $s_dob_error = "<style>#s_dob{border:1px solid red;}</style>";
  //   $s_dob_default = "<style>#s_dob{border:1px solid #a9a9a9;}</style>";

  //   $s_mobile_error = "<style>#s_mobile{border:1px solid red;}</style>";
  //   $s_mobile_default = "<style>#s_mobile{border:1px solid #a9a9a9;}</style>";

  //   $this->errors = [];

  //   if(is_blank($this->student_name)) {
  //     $this->errors[] = "Name cannot be blank.";
  //     echo $s_name_error;
  //   } elseif (!has_length($this->student_name, array('min' => 3, 'max' => 255))) {
  //     $this->errors[] = "Name must be between 3 and 255 characters.";
  //     echo $s_name_error;
  //   }else{
  //     echo $s_name_default;
  //   }

  //   if(is_blank($this->student_branch)) {
  //     $this->errors[] = "Branch cannot be blank.";
  //     echo $s_branch_error;
  //   } elseif (!has_length($this->student_branch, array('min' => 3, 'max' => 255))) {
  //     $this->errors[] = "Name must be between 3 and 255 characters.";
  //     echo $s_branch_error;
  //   }else{
  //     echo $s_branch_default;
  //   }

  //   if(!is_blank($this->student_mobile)) {
  //   if (!has_length($this->father_mobile, array('min'=>10,'max' => 10))) {
  //     $this->errors[] = "Your mobile number must has 10 characters.";
  //     echo $s_mobile_error;
  //   }elseif (is_valid_mobile_number($this->student_mobile) === false) {
  //     $this->errors[] = "Your mobile number is not in valid format.";
  //     echo $s_mobile_error;
  //   } else{
  //     echo $s_mobile_default;
  //   }
  // }
  
  //   if(is_blank($this->father_mobile)) {
  //     $this->errors[] = "Father/Mother mobile cannot be blank.";
  //     echo $f_mobile_error;
  //   } elseif (!has_length($this->father_mobile, array('min'=>10,'max' => 10))) {
  //     $this->errors[] = "Father's mobile number must has 10 characters.";
  //     echo $f_mobile_error;
  //   } elseif (is_valid_mobile_number($this->father_mobile) === false){
  //     $this->errors[] = "Father's mobile number must be in valid format";
  //     echo $f_mobile_error;
  //   } else{
  //     echo $f_mobile_default;
  //   }

  //   if(!is_blank($this->student_dob)) {
  //   if (is_valid_dob($this->student_dob) == true) {
  //     $this->errors[] = "DOB is not in valid format. Please use dd/mm/yyyy";
  //     echo $s_dob_error;
  //   } else{
  //     echo $s_dob_default;
  //   }
  // }

  
    // if(is_blank($this->last_name)) {
    //   $this->errors[] = "Last name cannot be blank.";
    // } elseif (!has_length($this->last_name, array('min' => 2, 'max' => 255))) {
    //   $this->errors[] = "Last name must be between 2 and 255 characters.";
    // }

    
    // if(is_blank($this->student_email)) {
    //   $this->errors[] = "Email cannot be blank.";
    //   echo $email_error;
    // } elseif (!has_length($this->student_email, array('max' => 255))) {
    //   $this->errors[] = "Email must be less than 255 characters.";
    //   echo $email_error;
    // } elseif (!has_valid_email_format($this->student_email)) {
    //   $this->errors[] = "Email must be a valid format.";
    //   echo $email_error;
    // } elseif (!has_unique_email($this->student_email, $this->id ?? 0)) {
    //   $this->errors[] = "This email ({$this->student_email}) has already registered. Try another.";
    //   echo $email_error;
    // }else{
    //   echo $email_default;
    // }





/*--------------KEVINS*/
    // if(is_blank($this->username)) {
    //   $this->errors[] = "Username cannot be blank.";
    // } elseif (!has_length($this->username, array('min' => 8, 'max' => 255))) {
    //   $this->errors[] = "Username must be between 8 and 255 characters.";
    // } elseif (!has_unique_username($this->username, $this->id ?? 0)) {
    //   $this->errors[] = "Username not allowed. Try another.";
    // }

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
      }

      if(is_blank($this->confirm_password)) {
        $this->errors[] = "Confirm password cannot be blank.";
      } elseif ($this->password !== $this->confirm_password) {
        $this->errors[] = "Password and confirm password must match.";
      }
    }*/

  //   return $this->errors;
  // }

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

  static public function find_by_email($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE student_email='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

}

?>