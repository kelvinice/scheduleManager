<?php 
	require "../connect.php";
	session_start();

	$email =  $_POST["Email"];
	$password = $_POST["Password"];


	
	$query = "SELECT * FROM msuser WHERE Email = '".$email."' AND Password = '".$password."'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);

	if($count != 1){
		header('Location: ../login.php?err=login failed');
	}else{
		$temp = mysqli_fetch_assoc($result);
		
		$_SESSION["username"] = $temp["Username"];
		$_SESSION["email"] = $email;
		$_SESSION["role"] = $temp["Role"];
		$_SESSION["profilePicture"] = $temp["ProfilePicture"];
		$_SESSION["dob"] = $temp["Dob"];

		header("Location: ../index.php");
	}
	
 ?>