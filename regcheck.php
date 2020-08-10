<?php

	
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		$sql = "INSERT INTO User (uname,email,password)
	 	VALUES ('$uname','$email','$password')";

	 	if (mysqli_query($conn, $sql)) {
				echo "New record created successfully !";
			 } else {
				echo "Error: " . $sql . " " . mysqli_error($conn);
			 }
			 mysqli_close($con);

			}	

	}else{
		//echo "invalid request";
		header('location: login.html');
	}


?>