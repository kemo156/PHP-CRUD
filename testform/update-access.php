<?php
include("updateserv.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="login">
		<h1 align="center">UPDATE</h1>
		<form action="" method="post" style="text-align:center;">

				<input type="text" name="fname" value="<?php echo $forms['fname']; ?>"><br/><br/>
				<input type="text" name="mname" value="<?php echo $forms['mname']; ?>"><br/><br/>
				<input type="text" name="lname" value="<?php echo $forms['lname']; ?>"><br/><br/>
				<input type="text" name="address" value="<?php echo $forms['address']; ?>"><br/><br/>
				<input type="text" name="phone" value="<?php echo $forms['phone']; ?>"><br/><br/>
				<input type="text" name="email" value="<?php echo $forms['email']; ?>"><br/><br/>
				<input type="submit" name="submit" value="Update">
						
		</form>
	</div>
	
</body>
</html>