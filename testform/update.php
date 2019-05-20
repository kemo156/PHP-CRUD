<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update-Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="login">
		<h1 align="center">Update</h1>
		<form action="" method="post" style="text-align:center;">
				<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
				<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
				<input type="submit" value="Update" name="submit">
				<span><?php echo $invalid; ?></span>
		</form>
	</div>
	
</body>
</html>