<?php 
ini_set('display_errors', 1);
require("dompdf/autoload.inc.php");

use  Dompdf\Dompdf;

$x = new Dompdf();

$design ="
<html>
<body>
<table style='width: 100%;height: 50;border:2px groove red'>
  <tr>
    <td>username</td>
      <td>password</td>
        <td>email</td>
  </tr>
</table>
</body>
</html>";
 $x -> loadHtml($design);
$x -> setPaper("A4","potrait");
// set the content on pdf page
$x ->render();

$x -> stream();
 ?>