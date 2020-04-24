<?php

class Captcha{
	//public $errors;

	public function check_captcha($code){
		$path = PRIVATE_PATH . '/shared/captcha/securimage/securimage.php';
		require_once($path);
		$securimage = new Securimage();
		if ($securimage->check($code) == false) {
	  // the code was incorrect
	  // you should handle the error so that the form processor doesn't continue
	  // or you can use the following code if there is no validation or you do not know how
	  /*echo "<div style='color:red'>The security code entered was INCORRECT.</div><br /><br />";
	  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";*/
	  return false;
	  
	}else{
		return true;
		// echo '<div style=\'color:green\'><br>You wrote CORRECT captcha.<br> GOOD..!)</div><br>';
	}
	}
	
}

?>