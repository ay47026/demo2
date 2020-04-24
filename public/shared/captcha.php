<?php
//genereat random unique key
//echo md5(uniqid(time()));
//for microSeconds---------
//$start_time = microtime(true);
//session_start();

require_once(SHARED_PATH . '/captcha/securimage/securimage.php');

?>
	
	<div id="for_captcha" class="captcha  d-flex justify-content-center align-items-center row">
		<span class="mb-2">Fill the this captcha please</span>
<div class="col-md-12 mb-3 d-flex justify-content-center align-items-center">
	<img id="captcha" src="<?php echo url_for_private('/shared/captcha/securimage/securimage_show.php');?>" alt="CAPTCHA Image" />
</div>
<div class="col-md-12 d-flex justify-content-center align-items-center">
		<input type="text" class="  ml-1" name="captcha_code " size="10" maxlength='6'><!-- <input type="text" name="captcha_code" size="10" maxlength='6' id="input_for_captcha"> -->
		<a href="#" onclick="this.parentElement.parentElement.children[0].src = <?php echo '\''. url_for_private('/shared/captcha/securimage/securimage_show.php?') . '\'';?> + Math.random(); return false">
			<img src="<?php echo url_for('/images/refresh.svg');?>" class='refresh_icon' id='refresh_icon' style="width: 30px;height: 30px;margin-left: 15px;"></a>
</div>
		
	
	</div>

	

<?php



//for microSeconds---------

// Sleep for a while
//sleep(1);
/*echo '<hr>';
$end_time = microtime(true);
$time = $end_time - $start_time;
echo 'start_time = '.$start_time.'<br>end_time = '. $end_time;

echo '<br>Execution time '. number_format((float) $time, 10).' seconds';

echo '<hr><br>';*/


?>
