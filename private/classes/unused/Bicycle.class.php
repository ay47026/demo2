<?php

class Bicycle extends DatabaseObject {

  /*static protected $table_name = 'bicycles';
  static protected $db_columns = ['id', 'brand', 'model', 'year', 'category', 'color', 'gender', 'price', 'weight_kg', 'condition_id', 'description'];*/

  /*public $id;
  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;
  public $weight_kg;
  public $condition_id;*/

  static protected $table_name = 'teacher';
  static protected $db_columns = ['id', 'teacher_name', 'teacher_qualification', 'teacher_subject', 'teacher_type', 'teacher_dob', 'teacher_gender', 'teacher_mobile', 'teacher_email', 'teacher_address'];

  public $id;
  public $teacher_name;
  public $teacher_qualification;
  public $teacher_subject;
  public $teacher_type;
  public $teacher_dob;
  public $teacher_gender;
  public $teacher_mobile;
  public $teacher_email;
  public $teacher_address;

  public const TEACHER_TYPE = ['GUEST', 'PERMANENT'];

  /*public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public const GENDERS = ['Mens', 'Womens', 'Unisex'];

  public const CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];*/

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->teacher_name = $args['teacher_name'] ?? '';
    $this->teacher_qualification = $args['teacher_qualification'] ?? '';
    $this->teacher_subject = $args['teacher_subject'] ?? '';
    $this->teacher_type = $args['teacher_type'] ?? '';
    $this->teacher_dob = $args['teacher_dob'] ?? '';
    $this->teacher_gender = $args['teacher_gender'] ?? '';
    $this->teacher_mobile = $args['teacher_mobile'] ?? '';
    $this->teacher_email = $args['teacher_email'] ?? '@gmail.com';
    $this->teacher_address = $args['teacher_address'] ?? '';
  }

  public function name() {
    return "{$this->teacher_name} {$this->teacher_subject} {$this->teacher_mobile}";
  }
  
  
  /*
  public function condition() {
    if($this->condition_id > 0) {
      return self::CONDITION_OPTIONS[$this->condition_id];
    } else {
      return "Unknown";
    }
  }
  */

  protected function validate() {
    $email_error = "<style>#t_email{border:1px solid red;}</style>";
    $email_default = "<style>#t_email{border:1px solid #a9a9a9;}</style>";

    $t_mobile_error = "<style>#t_mobile{border:1px solid red;}</style>";
    $t_mobile_default = "<style>#t_mobile{border:1px solid #a9a9a9;}</style>";

    $t_subject_error = "<style>#t_subject{border:1px solid red;}</style>";
    $t_subject_default = "<style>#t_subject{border:1px solid #a9a9a9;}</style>";

    $t_name_error = "<style>#t_name{border:1px solid red;}</style>";
    $t_name_default = "<style>#t_name{border:1px solid #a9a9a9;}</style>";

    $t_dob_error = "<style>#t_dob{border:1px solid red;}</style>";
    $t_dob_default = "<style>#t_dob{border:1px solid #a9a9a9;}</style>";

    $this->errors = [];

    if(is_blank($this->teacher_name)) {
      $this->errors[] = "Name cannot be blank.";
      echo $t_name_error;
    } elseif (is_valid_full_name($this->teacher_name) == false) {
      $this->errors[] = "Name must contain only english alphabets.";
      echo $t_name_error;
    } elseif (!has_length($this->teacher_name, array('min' => 3, 'max' => 255))) {
      $this->errors[] = "Name must be between 3 and 255 characters.";
      echo $t_name_error;
    } 
    else{
      echo $t_name_default;
    }

    if(is_blank($this->teacher_subject)) {
      $this->errors[] = "Subject cannot be blank.";
      echo $t_subject_error;
    } elseif (!has_length($this->teacher_subject, array('min' => 3, 'max' => 255))) {
      $this->errors[] = "Name must be between 3 and 255 characters.";
      echo $t_subject_error;
    }else{
      echo $t_subject_default;
    }

    if(is_blank($this->teacher_mobile)) {
      $this->errors[] = "Father/Mother mobile cannot be blank.";
      echo $t_mobile_error;
    } elseif (!has_length($this->teacher_mobile, array('min'=>10,'max' => 10))) {
      $this->errors[] = "Mobile must has 10 characters.";
      echo $t_mobile_error;
    } elseif (is_valid_mobile_number($this->teacher_mobile) === false) {
      $this->errors[] = "Mobile is not in valid format.";
      echo $t_mobile_error;
    }
    else{
      echo $t_mobile_default;
    }

    
    if(!is_blank($this->teacher_email)) {
    if (!has_length($this->teacher_email, array('max' => 255))) {
      $this->errors[] = "Email must be less than 255 characters.";
      echo $email_error;
    } elseif (!has_valid_email_format($this->teacher_email)) {
      $this->errors[] = "Email must be a valid format.";
      echo $email_error;
    } elseif (!has_unique_email_of_teacher($this->teacher_email, $this->id ?? 0)) {
      $this->errors[] = "This email ({$this->teacher_email}) has already registered. Try another.";
      echo $email_error;
    }else{
      echo $email_default;
    }
  }

  if(!is_blank($this->teacher_dob)) {
   
    if (is_valid_dob($this->teacher_dob) === true) {
      $this->errors[] = "DOB is not in valid format. Please use dd/mm/yyyy";
      echo $t_dob_error;
    } else{
      echo $t_dob_default;
    }
  }

    // if(is_blank($this->username)) {
    //   $this->errors[] = "Username cannot be blank.";
    // } elseif (!has_length($this->username, array('min' => 8, 'max' => 255))) {
    //   $this->errors[] = "Username must be between 8 and 255 characters.";
    // } elseif (!has_unique_username($this->username, $this->id ?? 0)) {
    //   $this->errors[] = "Username not allowed. Try another.";
    // }

    return $this->errors;
  }

  static public function find_by_email($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE teacher_email='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

}

?>