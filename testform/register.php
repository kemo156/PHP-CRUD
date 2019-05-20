<?php
	include 'signupserv.php'
?> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="login">
		<h1 align="center">Register Form</h1>
		<form action="" method="post" style="text-align:center;">

				<input type="text" name="fname" placeholder="enter your first name"><br/><br/>
				<input type="text" name="mname" placeholder="enter your middle name"><br/><br/>
				<input type="text" name="lname" placeholder="enter your last name"><br/><br/>
				<input type="text" name="address" placeholder="enter your address"><br/><br/>
				<input type="text" name="phone" placeholder="enter your phone no"><br/><br/>
				<input type="text" name="email" placeholder="enter your email"><br/><br/>
				<input type="text" name="username" placeholder="enter your username">
				<input type="password" name="password" value="admin">
				<input type="submit" name="submit" value="SignUp">
				
				<span><?php echo $invalid; ?></span>
		</form>
	</div>
</body>
</html>
