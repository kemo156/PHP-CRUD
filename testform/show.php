<?php

	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "accessform"); 
	$query = mysqli_query($conn, "SELECT * FROM form");

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Records</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="login">
		<form action="" method="post" style="text-align:center;">
				<?php
					while($data=$query->fetch_assoc()){
						echo "Name: ".$data['fname']."<br/>";
						echo "Middle Name: ".$data['mname']."<br/>";
						echo "Last Name: ".$data['lname']."<br/>";
						echo "Address: ".$data['address']."<br/>";
						echo "Phone: ".$data['phone']."<br/>";
						echo "Email: ".$data['email']."<br/><br><br>";
					}
				?>
		</form>
	</div>
	
</body>
</html>