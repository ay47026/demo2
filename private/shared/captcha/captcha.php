<?php
//genereat random unique key
//echo md5(uniqid(time()));
//for microSeconds---------
$start_time = microtime(true);
//session_start();
	
	if(isset($_POST['submit'])){
		echo '<b>----------Developement Values----------</b>';
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		echo '---------------------------xxx---------------------------------';
		if(!empty($_POST['name'])){
			
			include_once $_SERVER['DOCUMENT_ROOT'] . '/captcha/securimage/securimage.php';
			$securimage = new Securimage();
			
			if ($securimage->check($_POST['captcha_code']) == false) {
	  // the code was incorrect
	  // you should handle the error so that the form processor doesn't continue
	  // or you can use the following code if there is no validation or you do not know how
	  echo "<div style='color:red'>The security code entered was INCORRECT.</div><br /><br />";
	  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
	  exit;
	}else{
		echo '<div style=\'color:green\'><br>You wrote CORRECT captcha.<br> GOOD..!)</div><br>';
	}
	
		}
}
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>form captcha</title></head>
<body>
<form action="" method="post">
	<div>
		<label>Name : </label>
		<input type="text" name="name">
	</div>
	
	<div id="for_captcha">
		<img id="captcha" src="/captcha/securimage/securimage_show.php" alt="CAPTCHA Image" />
		<input type="text" name="captcha_code" size="10" maxlength="6" />
		<a href="#" onclick="document.getElementById('captcha').src = '/captcha/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
	</div>
	
	<div id="submit_btn">
		<input type="submit" value="submit" name="submit">
	</div>
</form>
</body>
</html>
<?php


//for microSeconds---------

// Sleep for a while
//sleep(1);
echo '<hr>';
$end_time = microtime(true);
$time = $end_time - $start_time;
echo 'start_time = '.$start_time.'<br>end_time = '. $end_time;

echo '<br>Execution time '. number_format((float) $time, 10).' seconds';

echo '<hr><br>';


?>
