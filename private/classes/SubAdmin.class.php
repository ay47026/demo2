<?php

class SubAdmin extends DatabaseObject
{
    protected static $table_name = "subadmins";
    protected static $db_columns = ['id', 'first_name', 'last_name', 'email', 'mobile_number', 'employer_id','job_assign','job_designation','doj','gender','hashed_password'];

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $mobile_number;
    public $employer_id;
    public $job_assign;
    public $job_designation;
    public $doj;
    public $gender;
    public $password;
    public $captcha;
    protected $hashed_password;
    protected $password_required = true;


    public const JOB_ASSIGN = ['New student registeration', 'Student verification'];
    public const JOB_DESIGNATION = ['Professor', 'Asistant' ,'Guest', 'Dean','HOD'];
    public const GENDER = ['Mens', 'Womens', 'Unisex'];

    // Funcion __construct() will automatically get called when an object is created of the particular class.
    // Put lowercase values in DB that is why strtolower is used here.
    // I'm NOT using strtolower() for select (means have options to user) attributes like gender.
    // gender has options like 'Womens', 'Mens', 'Unisex'.
    // If you want to use strtolower() for select attributes then you have to pass `$case_insensitive=true` in has_exclusion_of().
    // has_exclusion_of() function is using in validation (which is using in this file).
    public function __construct($args=[])
    {
        $this->first_name = isset($args['first_name']) ? strtolower($args['first_name']): '';
        $this->last_name = isset($args['last_name'])? strtolower($args['last_name']): '';
        $this->email = isset($args['email'])? strtolower($args['email']) : '';
        $this->mobile_number = $args['mobile_number'] ?? '';
        $this->employer_id = $args['employer_id'] ?? rand(2, 1000);
        $this->job_assign = $args['job_assign'] ?? '';
        $this->job_designation = $args['job_designation'] ?? '';
        $this->doj = $args['doj'] ?? date("d/m/Y");
        $this->gender = $args['gender'] ?? '';
        $this->password='1234';
        $this->captcha=$args['captcha_code'] ?? '';
    }

    public function captcha_checking()
    {
        $new = new Captcha;
        $code = $this->captcha;
        $result = $new->check_captcha($code);
        if ($result === false) {
            $this->errors[] = "Wrong captcha...Try Again !";
        }
    }

    public function full_name()
    {
        $full_name = $this->first_name . ' ' . $this->last_name;
        return ucwords($full_name);
    }

    protected function set_hashed_password()
    {
        $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function verify_password($password)
    {
        return password_verify($password, $this->hashed_password);
    }

    protected function create()
    {
        $this->set_hashed_password();
        return parent::create();
    }

    protected function update()
    {
        if ($this->password != '') {
            $this->set_hashed_password();
        // validate password
        } else {
            // password not being updated, skip hashing and validation
            $this->password_required = false;
        }
        return parent::update();
    }


    private function set_css_for_errors()
    {
        $all_css = [];
        $css_error='border:1px solid red;}</style>';
        $css_default='border:1px solid #ced4da;}</style>';

        $all_css['first_name_error']='<style>#first_name{'.$css_error;
        $all_css['first_name_default']='<style>#first_name{'.$css_default;

        $all_css['last_name_error'] = '<style>#last_name{'.$css_error;
        $all_css['last_name_default'] = '<style>#last_name{'.$css_default;

        $all_css['gender_error'] = '<style>#gender{'.$css_error;
        $all_css['gender_default'] = '<style>#gender{'.$css_default;

        $all_css['email_error'] = '<style>#email{'.$css_error;
        $all_css['email_default'] = '<style>#email{'.$css_default;

        $all_css['mobile_error'] = '<style>#mobile_number{'.$css_error;
        $all_css['mobile_default'] = '<style>#mobile_number{'.$css_default;

        $all_css['employer_id_error'] = '<style>#employer_id{'.$css_error;
        $all_css['employer_id_default'] = '<style>#employer_id{'.$css_default;

        $all_css['job_assign_error'] = '<style>#job_assign{'.$css_error;
        $all_css['job_assign_default'] = '<style>#job_assign{'.$css_default;

        $all_css['job_designation_error'] = '<style>#job_designation{'.$css_error;
        $all_css['job_designation_default'] = '<style>#job_designation{'.$css_default;

        return $all_css;
    }

    protected function validate()
    {
        $css_errors = $this->set_css_for_errors();
        // At the very first, reset all errors
        $this->errors = [];

        /* For first name ---------*/
        if (is_blank($this->first_name)) {
            $this->errors[] = "First name cannot be blank.";
            echo $css_errors['first_name_error'];
        } elseif (!has_length($this->first_name, array('min' => 3, 'max' => 15))) {
            $this->errors[] = "First name must be between 3 and 15 characters.";
            echo $css_errors['first_name_error'];
        } elseif (!has_valid_name_format($this->first_name)) {
            $this->errors[] = "You can use only Alphabet for First Name.";
            echo $css_errors['first_name_error'];
        } else {
            echo $css_errors['first_name_default'];
        }

        /* For last name ---------*/
        if (is_blank($this->last_name)) {
            $this->errors[] = "Last name cannot be blank.";
            echo $css_errors['last_name_error'];
        } elseif (!has_length($this->last_name, array('min' => 3, 'max' => 15))) {
            $this->errors[] = "Last name must be between 2 and 15 characters.";
            echo $css_errors['last_name_error'];
        } elseif (!has_valid_name_format($this->last_name)) {
            $this->errors[] = "You can only use alphabet(a-z,A-Z) for Last Name.";
            echo $css_errors['last_name_error'];
        } else {
            echo $css_errors['last_name_default'];
        }

        /* For email ---------*/
        if (is_blank($this->email)) {
            $this->errors[] = "Email cannot be blank.";
            echo $css_errors['email_error'];
        } elseif (!has_valid_email_format($this->email)) {
            $this->errors[] = "Email must be in a valid format.";
            echo $css_errors['email_error'];
        } elseif (!has_length($this->email, array('max' => 255))) {
            $this->errors[] = "Email must be less than 255 characters.";
            echo $css_errors['email_error'];
        } elseif (!has_unique_email($this->email, $this->id ?? 0, 'SubAdmin')) {
            $this->errors[] = "This email ({$this->email}) has already registered. Please try another one !";
            echo $css_errors['email_error'];
        } else {
            echo $css_errors['email_default'];
        }

        /* For mobile number ---------*/
        if (is_blank($this->mobile_number)) {
            $this->errors[] = "mobile_number cannot be blank.";
            echo $css_errors['mobile_error'];
        } elseif (!has_length_exactly($this->mobile_number, 10)) {
            $this->errors[] = "mobile_number must be of 10 digits.";
            echo $css_errors['mobile_error'];
        } elseif (!is_valid_mobile_number($this->mobile_number)) {
            $this->errors[] = "You can only use numbers(0-9) for mobile number.";
            echo $css_errors['mobile_error'];
        } else {
            echo $css_errors['mobile_default'];
        }

        /* For gender ---------*/
        if (is_blank($this->gender)) {
            $this->errors[] = "gender cannot be blank.";
            echo $css_errors['gender_error'];
        } elseif (has_exclusion_of($this->gender, self::GENDER, $case_insensitive=false)) {
            $this->errors[] = "`{$this->gender}` is not valid value for gender.";
            echo $css_errors['gender_error'];
        } else {
            echo $css_errors['gender_default'];
        }

        /* For job_assign ---------*/
        if (is_blank($this->job_assign)) {
            $this->errors[] = "job assign cannot be blank.";
            echo $css_errors['job_assign_error'];
        } elseif (has_exclusion_of($this->job_assign, self::JOB_ASSIGN, $case_insensitive=false)) {
            $this->errors[] = "`{$this->job_assign}` is not valid value for job assign.";
            echo $css_errors['job_assign_error'];
        } else {
            echo $css_errors['job_assign_default'];
        }

        /* For job_designation ---------*/
        if (is_blank($this->job_designation)) {
            $this->errors[] = "job designation cannot be blank.";
            echo $css_errors['job_designation_error'];
        } elseif (has_exclusion_of($this->job_designation, self::JOB_DESIGNATION, $case_insensitive=false)) {
            $this->errors[] = "`{$this->job_designation}` is not valid value for job designation.";
            echo $css_errors['job_designation_error'];
        } else {
            echo $css_errors['job_designation_default'];
        }

        /* For employer_id ---------*/
        if (is_blank($this->employer_id)) {
            $this->errors[] = "employer id cannot be blank.";
            echo $css_errors['employer_id_error'];
        } elseif ($this->has_uniqueness($this->employer_id, 'employer_id') == false) {
            $this->errors[] = "`{$this->employer_id}` has already in use. Please try another one !";
            echo $css_errors['employer_id_error'];
        } else {
            echo $css_errors['employer_id_default'];
        }

        // checking for cpatcha
        $this->captcha_checking();

        // if($this->password_required) {
        //   if(is_blank($this->password)) {
        //     $this->errors[] = "Password cannot be blank.";
        //   } elseif (!has_length($this->password, array('min' => 12))) {
        //     $this->errors[] = "Password must contain 12 or more characters";
        //   } elseif (!preg_match('/[A-Z]/', $this->password)) {
        //     $this->errors[] = "Password must contain at least 1 uppercase letter";
        //   } elseif (!preg_match('/[a-z]/', $this->password)) {
        //     $this->errors[] = "Password must contain at least 1 lowercase letter";
        //   } elseif (!preg_match('/[0-9]/', $this->password)) {
        //     $this->errors[] = "Password must contain at least 1 number";
        //   } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        //     $this->errors[] = "Password must contain at least 1 symbol";
        //   }

        //   if(is_blank($this->confirm_password)) {
        //     $this->errors[] = "Confirm password cannot be blank.";
        //   } elseif ($this->password !== $this->confirm_password) {
        //     $this->errors[] = "Password and confirm password must match.";
        //   }
        // }

        return $this->errors;
    }

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
        $sql .= "WHERE email='" . self::$database->escape_string($username) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
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
