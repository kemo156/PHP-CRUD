<?php

$invalid='';

if(isset($_POST['submit'])){
	  if(empty($_POST['fname']) || empty($_POST['mname']) || 
	  	empty($_POST['lname']) || empty($_POST['address']) || 
	     empty($_POST['phone']) || 
	  	empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])){
		  $invalid = "Must fill the areas completely";
	  }
	 else
	 {
	 		
	 		$conn = mysqli_connect("localhost", "root", "");
		 	$db = mysqli_select_db($conn, "accessform"); 
			
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$gender=$_POST['gender'];
			$phone = $_POST['phone'];
			$email=$_POST['email'];
			$user = $_POST['username'];
			$pass = $_POST['password'];

			$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

			$register_query = "INSERT INTO `form`(`fname`, `mname`, `lname`, `address`, `email`, `phone`, `username`, `password`) VALUES ('$fname','$mname','$lname','$address','$email','$phone','$user','$hashedPwd')";

		try{
			$register_result = mysqli_query($conn, $register_query);
		if($register_result){
				if(mysqli_affected_rows($conn)>0){
					 header("Location: login-access.php");
				}else{
				echo("Invalid");
				}
			 
			}
		}catch(Exception $ex){
				echo("error".$ex->getMessage());
			}
		}
	}

 
?>