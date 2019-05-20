<?php
 include("loginserv.php"); 

 $invalid='';
 $id = $_SESSION["userid"];
 

 $conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "accessform"); 

 $query = mysqli_query($conn, "SELECT * FROM form WHERE id='$id'");
 $forms=$query->fetch_assoc();

if(isset($_POST['submit'])){

	  if(empty($_POST['fname']) || empty($_POST['mname']) || 
	  	empty($_POST['lname']) || empty($_POST['address']) ||empty($_POST['phone']) || 
	  	empty($_POST['email'])){
		  $invalid = "Please fill the areas completely";
	  }
	 else
	 {
	 		
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$phone = $_POST['phone'];
			$email=$_POST['email'];

			$update_query = "UPDATE form SET fname='$fname',mname='$mname',lname='$lname',address='$address',phone='$phone',email='$email' WHERE id='$id'";


		try{

			$register_result = mysqli_query($conn, $update_query);

		if($register_result){
				if(mysqli_affected_rows($conn)>0){
					 header("Location: show.php");
				}else{
				 $invalid='error in update';
				}
			 
			}

		}catch(Exception $ex){
				echo("error".$ex->getMessage());
			}
		}
	}

 
?>