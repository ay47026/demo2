<!DOCTYPE html>
<html>
<head>
	<title>sms</title>
</head>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<body>


<form>
	<input type="number" id="mobile" name="mobile">
	<textarea name="message" id="text"></textarea>
	<button type="submit"> send</button>

</form>
<script >
	$(document).ready(function(){
	
   $("form").submit(function(e){
   		var mobile=document.getElementById('mobile').value;
		var text=document.getElementById('text').value;
   
   	e.preventDefault();
   	$.ajax({
   		type :"POST",
   		url:"sendsms.php",
   		data:{
   			mobile : mobile,
			message : text
   		},
   		processData :false,
   		contentType :false,
   		success:function(response){
              alert(response);
   		}
   	});
   })
	});
</script>
</body>
</html>