<?php
/* Getting current working input value */
// You can simulate a slow server with sleep
// sleep(2);
//session_start();
//if(!isset($_SESSION['favorites'])) { $_SESSION['favorites'] = []; }
function is_ajax_request() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
if(!is_ajax_request()) { exit; }
require_once('../../../../private/initialize.php');
?>
<?php
//$sql = "SELECT * FROM users ";
// $sql .="WHERE is_online=1 ";
// $sql .="AND ";
// $sql .= "is_playing=0";
$all_student = Student::find_all();
//$output = [];
$all_properties = get_class_vars('Student');
$ob_to_arr =[];
?>
<table class=" table table-bordered table-responsive" id="inventory">
  <tr>
    <?php
    /*
    Getting all defined properties of class 'Admin' and display
    one by one in table columns
    */
    foreach ($all_properties as $property => $value) {
    echo "<th>".$property ."</th>";
    $ob_to_arr[$property] = $property;
    }
    ?>
  </tr>
  <?php
  /*$current_page = $_GET['page'] ?? 1;
  $per_page = 5;
  $total_count = Bicycle::count_all();*/
  /*$pagination = new Pagination($current_page, $per_page, $total_count);*/
  // Find all bicycles;
  //$bicycles = Bicycle::find_all();
  /*$sql = "SELECT * FROM bicycles ";
  $sql .="LIMIT {$per_page} ";
  $sql .="OFFSET {$pagination->offset()}";
  $bikes = Bicycle::find_by_sql($sql);
  */
  //$teachers = Bicycle::find_all();
  ?>
  <?php foreach($all_student as $student) { ?>
  <tr>
    <td><?php echo h($student->id); ?></td>
    <td><?php echo h($student->image); ?></td>
    <td><?php echo h($student->first_name); ?></td>
    <td><?php echo h($student->last_name); ?></td>
    <td><?php echo h($student->father_name); ?></td>
    <td><?php echo h($student->email); ?></td>
    <td><?php echo h($student->batch); ?></td>
    <td><?php echo h($student->first_mob_no); ?></td>
    <td><?php echo h($student->father_mob_no); ?></td>
    <td><?php echo h($student->gender); ?></td>
    <td><?php echo h($student->dob); ?></td>
    <td><?php echo h($student->year); ?></td>
    <td><?php echo h($student->disability_percentage); ?></td>
    <td><?php echo h($student->branch); ?></td>
    <td><?php echo h($student->disability); ?></td>
    <td><?php echo h($student->address); ?></td>
    <!--<td><?php //echo h($student->address); ?></td>-->
    <td><?php echo h($student->aktu_roll_no); ?></td>
    <td><?php echo h($student->academic_detail); ?></td>
  </tr>
  <?php } ?>
</table>
