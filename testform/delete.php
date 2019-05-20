<?php
	include 'deleteserv.php'
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>delete</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="login">
		<h1 align="center">NAME</h1>
		<form action="" method="post" style="text-align:center;">
				<input type="text" placeholder="Username" id="user" name="fname"><br/><br/>
				<input type="submit" value="DELETE" name="submit">
				<span><?php echo $success; ?></span>
				<!-- Error Message -->				
		</form>
	</div>
	
</body>
</html>