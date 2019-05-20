<?php
	include 'loginserv.php'
	
?> 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="login">
		<h1 align="center">Login</h1>
		<form action="" method="post" style="text-align:center;">
				<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
				<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
				<input type="submit" value="Login" name="submit">
				<span><?php echo $invalid; ?></span> 
				
		</form>
	</div>
	
</body>
</html>