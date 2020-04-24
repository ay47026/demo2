<?php

// Redirect all default requests to homepage
//header("Location: /");
//exit;

// Or render a 404 page not found error:
//header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
//exit;
//header("HTTP/1.0 404 Not Found");

?>
<!DOCTYPE html>
<html>
<head>
	<title>ERROR 404</title>
	<style>
		.e_404{
			display: grid;
			grid-template-columns: 1fr;
			grid-row-gap: 0.2em;
			font-family: sans-serif;
			font-size: 2em;
			font-weight: bold;
			background-image: url(./images/overlay.png);
			width: 100%;
			height: 100%;
			background-size: cover;

		}
		.e_404 > div{
			background-color: blue;
			justify-self: center;
			color: #bbbcbd;
			width: 25%;
			padding: 5px;
			background-image: url(./images/overlay.png);
			background-size: cover;
			text-shadow: 1px 1px 10px dodgerblue
		}
		.img{
			text-align: center;
			background-color:#bbbcbd !important;
			background-size: auto !important;
		}
		.img img{width: 40%}
	</style>
</head>

<body>
<div class="e_404">
	<div>T |-| I S</div>
	<div> P /-\ G E</div>
	<div>  N () T</div>
	<div>  F () |_| |\| D</div>
	<div><marquee> http error 404</marquee></div>
	<div class="img">
		<img src="./images/error1.svg" alt="error 404">

	</div>
</div>

</body>
</html>
