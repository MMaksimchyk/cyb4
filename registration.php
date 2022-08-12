<html>
	<head>
		<title>Registration</title>
		<meta charset="utf8" />
		<style>
			input, button {
			width:150px;
			margin:1px;
			text-align:center;
			}
		</style>
	</head>
	
	<body>
	    <a href="index1.html">Home page<a/></br>
		<h3>New User Registration</h3>
		<form method="POST" action="check_registration.php">
			<a>Your email:</a></br>
			<a><input type="email" name="Email"/></a></br>
			<p><a>Your username:</a></br>
			<a><input type="text" name="txtUser"/></a></br>
			<p><a>Your password:</a></br>
			<input type="password" name="txtPwd"/></a></br>
			<p><a>Re-enter your password:</a></br>
			<input type="password" name="txtPwd_double"/></p></br>
			<button>Register</button></br>
		</form>
	</body>
</html>