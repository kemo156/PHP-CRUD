<?php
	$success='';

	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "accessform"); 

	if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
		
		$query = "DELETE FROM form WHERE fname='$fname'";

		 $check = mysqli_query($conn, "SELECT * FROM form WHERE fname='$fname'");// this will check if theres existing name first on the db
	 
	     $rows = mysqli_num_rows($check); // this will be the number of rows if there's an existing name on the db

		 if($rows > 0){
			 if ($conn->query($query) === TRUE) {
	    	$success = 'Deleted Successfully!';
			} else {
			    echo "Error deleting record: " . $conn->error;
			}
		 }else{
		 	$success = "No name found!";
		 }
		
			$conn->close();
	}
?>
