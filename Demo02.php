<html>
	<head>
		<title>Demo PHP!</title>
			<meta charset="utf-8" />
		
	</head>
	
	<body>
		<h1>Hello from PHP</h1>
		<a href="index1.html">Home page<a/>
		
		<?php
			$x = 2;
			$y = 2;
			$z = $x + $y;
			echo "<h2> Result: $z</h2>";
			
			date_default_timezone_set("Europe/Moscow");
			$now = date("H:i:s");
			echo "<h1>Page opened at $now</h1>";
		?>
		
		<p>Put here number and we will double it:
		<form action="doubler.php" >
		
			<input type="text" name="DATA" />
			<button>Send data for double</button>
		
		</form>
	</body>
</html>