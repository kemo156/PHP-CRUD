<!-- loginserv -->

<?php

$invalid=''; //Variable to Store error message;

if(isset($_POST['submit'])){
	 if(empty($_POST['user']) || empty($_POST['pass'])){
		 $invalid = "Incorrect";
	 }
	 else
	 {
		 $user=$_POST['user'];
		 $pass=$_POST['pass'];

		$conn = mysqli_connect("localhost", "root", "");

		 $db = mysqli_select_db($conn, "accessform"); //Name of DB "accessform"

		 $query = mysqli_query($conn, "SELECT * FROM form WHERE username='$user'"); //table  = form
	 	 $forms=$query->fetch_assoc();////>>>getting info id of the specific row
	 	 $userid = $forms['id'];
		 $userpw = $forms['password'];

		 $hashvfy = password_verify($pass, $userpw); // if the result is 0 = no match, if it's 1 == its true
		
	 	
		    if($hashvfy==1){
				 $rows = mysqli_num_rows($query);

				 if($rows == 1){
					//header("Location: login-access.php"); // Redirecting to other page
				    header("Location:".$_POST["submit"]."-access.php?userid=".$userid);
				 }
				 else
				 {
					 $invalid = "Incorrect";
				 }
					 mysqli_close($conn); 
			}else
				$invalid = "Incorrect";
	 }
}
 
?>