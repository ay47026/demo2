<?php

// You can simulate a slow server with sleep.
// sleep(1);

function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(!is_ajax_request()) { exit; }
// if the request is AJAX then include the file
require_once('../../../private/initialize.php');

// Show this page only when user is loged-in.
$is_login = ajax_require_login();

if ($is_login === false) {
  echo 'false';
  exit;
}else {
  // continue execting...
}
?>

<?php
  //unset($_SESSION['current_page']);exit;

  if($_GET['page'] != 'a'){
    $current_page = $_GET['page'];
  }elseif($_GET['page'] == 'a' && !isset($_SESSION['current_page'])){
    // runs only single (first) time.
    $current_page = 1;
  }else{
    // Preserve last opened page.
    $current_page = $_SESSION['current_page'] ?? $_GET['page'];
  }

  $ses = $_SESSION['current_page'] ?? $current_page;
  /*echo '$current_page='.$current_page.'<br>'; 
  echo '$ses='.$ses.'<br>';
  echo '$sesssion='.$_SESSION['current_page'];
  echo '<br>';*/

  if($current_page == 1 && $ses == 1){
    //echo '<h1>==</h1>';
    $_SESSION['current_page'] = $current_page;
  }elseif($current_page >  $ses){
    //echo '<h1>></h1>';
    $_SESSION['current_page'] = $current_page;
  }elseif($current_page <  $ses){
    //echo '<h1><</h1>';
    $_SESSION['current_page'] = $current_page;
  }

// PREVIOUS CODE (without pagination)
// Find all sub-admins
/*$all_employee = SubAdmin::find_all();*/

// NEW CODE (with pagination)

$per_page = 5;
// Find the number of rows in DB-table.
$total_count = SubAdmin::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

$sql = "SELECT * FROM subadmins ";
$sql .="LIMIT {$per_page} ";
$sql .="OFFSET {$pagination->offset()}";
$all_employee = SubAdmin::find_by_sql($sql);

$output = [];

// It has only keys not values
$all_properties_without_value = get_class_vars('SubAdmin');
$all_properties=[];
$count = 0;
foreach ($all_properties_without_value as $key => $value) {
  // do not include errors key here.
  if ($key == 'errors') {
    continue;
  }

  // I'm using strval for memory saving
  $all_properties[$key] = strval($count);
  $count++;
} // endof foreach

// convert: key <--> value
$all_properties_fliped = array_flip($all_properties);

// only these columns will show in html-table (user-interface)
$show_some_columns_rough = ['id','first_name','job_assign','gender','email'];
$show_some_columns_aligned = [];
foreach ($all_properties_fliped as $key => $value) {
  if(has_inclusion_of($value, $show_some_columns_rough) === true){
    $show_some_columns_aligned[$key] = $value;
}
} // endof foreach
// use ksort() if values are not priting in correct order in html-table.
// ksort($show_some_columns_aligned);
?>

<table class="table table-bordered " id="inventory">
  <tr>
    <?php
    /*
    Get all defined properties of class 'SubAdmin' and display
    one by one in table columns
    */
    foreach ($all_properties_fliped as $key => $value) {
      if (has_inclusion_of($value, $show_some_columns_aligned) === true) {
    echo '<th>'.str_replace('_',' ',strtoupper($value)) .'</th>';
      }
    } // end foreach
    echo '<th colspan=3>Action</th>';
    ?>
  </tr>

  <?php foreach($all_employee as $employee): ?>
  <tr>
    <?php 
    foreach ($show_some_columns_aligned as $value) {
      $row = '<td>';
      // printing 'F' inplace of 'Womens'
      // printing 'M' inplace of 'Mens'
      // else it will print 'Unisex'
      if (strtolower($value) == 'gender') {
      switch (strtolower($employee->$value)) {
        case 'womens':
          $row .='F';
          break;
        case 'mens':
          $row .='M';
          break;
        
        default:
          $row .=h($employee->$value);
          break;
      }
    } elseif (strtolower($value) == 'first_name') {
      // Getting first_name and last_name together
      $row .=$employee->full_name();
    } else{
      $row .= h($employee->$value);
    }
      $row .= '</td>';
      echo $row;
    }
    echo '<td><a class="action" href="">View</a></td>';
    echo '<td><a class="action" href="">Edit</a></td>';
    echo '<td><a class="action" href="">Delete</a></td>';
     ?>
  </tr>
  <?php endforeach; ?>
</table>

<?php 
  $url = url_for('/staff/main_admin/index.php');
  echo $pagination->page_links($url);
?>


<?php 
for ($i=0; $i <3 ; $i++) { 
  echo '<h1>'.'all rows are not printing due to BOOTSTRAP'.'</h1>';
}
 ?>

