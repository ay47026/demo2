<?php

class MainAdmin extends DatabaseObject {

  static protected $table_name = "main_admin_login";
  static protected $db_columns = ['id', 'admin', 'email', 'hashed_password', 'currently_logged_in'];

public $id;
public $admin;
public $email;
public $password;
public $currently_logged_in;
//public $confirm_password;
public $captcha;
protected $hashed_password;
protected $password_required = true;


  public function __construct($args=[]) {
    $this->email = $args['user_id'] ?? '';
    $this->admin = $args['admin'] ?? 'main_admin';
    $this->currently_logged_in = $args['currently_logged_in'] ?? 0;
    $this->password = $args['password'] ?? '123456';
    $this->captcha=$args['captcha_code'] ?? '';
    //$this->confirm_password = $args['confirm_password'] ?? '';
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
    return $this->email . " | " . $this->admin;
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


  static public function find_by_username($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE email='" . self::$database->escape_string($username) . "'";
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


  private function set_css_for_errors(){
    $all_css = [];
    $css_error='border:1px solid red;}</style>';
    $css_default='border:1px solid #ced4da;}</style>';

    $all_css['email_error']='<style>#user_id{'.$css_error;
    $all_css['email_default']='<style>#user_id{'.$css_default;

    $all_css['password_error'] = '<style>#password{'.$css_error;
    $all_css['password_default'] = '<style>#password{'.$css_default;

    return $all_css;
  }

  public function get_errors() {
    return $this->validate();
  }


  protected function validate() {
    $css_errors = $this->set_css_for_errors();
    // At the very first, reset all errors
    $this->errors = [];


     /* For first name ---------*/
    if(is_blank($this->password)) {
      $this->errors[] = "Password cannot be blank.";
      echo $css_errors['password_error'];
    } elseif (!has_length($this->password, array('min' => 3, 'max' => 15))) {
      $this->errors[] = "Password must be between 3 and 15 characters.";
       echo $css_errors['password_error'];
    } else {
       echo $css_errors['password_default'];
    }

     /* For email ---------*/
    if(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
      echo $css_errors['email_error'];
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be in a valid format.";
      echo $css_errors['email_error'];
    } elseif (!has_length($this->email, array('max' => 255))) {
      $this->errors[] = "Email must be less than 255 characters.";
      echo $css_errors['email_error'];
    } else{
      echo $css_errors['email_default'];
    }
    

    // Check for captcha only when the above defined error is empty.
    // This improves the speed of the code.
    if (empty($this->errors)) {
      // Checking for cpatcha
      $this->captcha_checking();
    }
      return $this->errors;
    
  }
}

?>