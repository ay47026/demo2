<?php

class Browser_details extends DatabaseObject {

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
   /*public const TEACHER_TYPE = ['GUEST', 'PERMANENT'];*/

  /*public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public const GENDERS = ['Mens', 'Womens', 'Unisex'];

  public const CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];*/

  static protected $table_name = 'browser_details';
  static protected $db_columns = ['id', 'remote_ip', 'plateform', 'browser_name', 'request_time', 'remote_port'];

  public $id;
  public $user_agent;
  public $remote_ip;
  public $plateform;
  public $browser_name;
  public $request_time;
  public $remote_port;

  public function __construct() {
    $this->set_user_agent();
    $this->reset();
  }

  public function set_args_for_db($args=[]){
    $this->remote_ip = $args['remote_ip'] ?? '';
    $this->plateform = $args['plateform'] ?? '';
    $this->browser_name = $args['browser_name'] ?? '';
    $this->request_time = $args['request_time'] ?? '';
    $this->remote_port = $args['remote_port'] ?? ''; 
  }
  protected function create() {
    $attributes = $this->sanitized_attributes();
    $sql = "INSERT INTO " . static::$table_name . " (";
    $sql .= join(', ', array_keys($attributes));
    $sql .= ") VALUES ('";
    $sql .= join("', '", array_values($attributes));
    $sql .= "')";
    $result = self::$database->query($sql);
    if($result) {
      $this->id = self::$database->insert_id;
    }
    return $result;
  }

  public function set_user_agent() {
    if(isset($_SERVER['HTTP_USER_AGENT'])) {
      $this->user_agent = $_SERVER['HTTP_USER_AGENT'];
    } else {
      $this->user_agent = '';
    }
  }
  
  public function reset() {
    $this->platform = 'Unknown';
    $this->browser_name = 'Unknown';
  }
  
  public function detect() {
    $this->detect_platform();
    $this->detect_browser();
    return array($this->platform, $this->browser_name);
  }
  
  public function detect_platform() {
    if(preg_match('/linux/i', $this->user_agent)) {
      $this->platform = 'Linux';
    } elseif(preg_match('/macintosh|mac os/i', $this->user_agent)) {
      $this->platform = 'Mac';
    } elseif(preg_match('/windows|win32/i', $this->user_agent)) {
      $this->platform = 'Windows';
    }
  }
  
  public function detect_browser() {
    if(preg_match('/MSIE/i', $this->user_agent)) {
      $this->browser_name = 'Internet Explorer';
    } elseif(preg_match('/Firefox/i', $this->user_agent)) {
      $this->browser_name = 'Firefox';
    } elseif(preg_match('/Chrome/i', $this->user_agent)) {
      $this->browser_name = 'Chrome';
    } elseif(preg_match('/Safari/i', $this->user_agent)) {
      $this->browser_name = 'Safari';
    } elseif(preg_match('/Opera/i', $this->user_agent)) {
      $this->browser_name = 'Opera';
    } elseif(preg_match('/Netscape/i', $this->user_agent)) {
      $this->browser_name = 'Netscape';
    }
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