<?php
	session_start();

	//Фактически, здесь реализована авторизация
	if (!isset ($_SESSION["user"])) {
			echo '<meta http-equiv="refresh" content= "2; url= login.php" />';
			die("You will be redirected to login page!");
	}
?>

<html>
	<head>
		<title>Calculater</title>
		<meta charset="utf-8" />	
		<style>
			input, button {
				width: 150px;
				margin: 5px;
				text-align: center;
			}	
		</style>
		
		<script>
			function plus() {
				var x, y, z;
				x = parseInt(document.getElementById("txt1").value);
				y = parseInt(document.getElementById("txt2").value);
				z = x + y;
				document.getElementById("txt3").value = z;
			}
		</script>
	</head>
	
	<body>
		<a href="index1.html">Home page<a/>
		<h1>Calculater on clean JS</h1>
		<input type="text" id="txt1" autocomplete="off" /> <br />
		<input type="text" id="txt2" autocomplete="off" /> <br />
		<button onclick="plus();">+</button> <br />
		<input type="text" id="txt3" readonly="on" />
		
	</body>
</html>