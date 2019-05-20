<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
//include 'logoutserv.php'

if(isset( $_SESSION['userid'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: login.php");
}

	if(isset($_POST['submit'])) {
		session_destroy();
	     header("Location: login.php");
		}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome</title>
</head>
<body>
	<h1>Log in Successfully</h1>
		<form action="" method="post" style="text-align:center;">
				<input type="submit" value="logout" name="submit">		
		</form>
</body>
</html>