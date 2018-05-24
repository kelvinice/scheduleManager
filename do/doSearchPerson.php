<?php 
	require "../connect.php";
	session_start();

	$email =  $_POST["Email"];
	
	$query = "SELECT Email, Username, ProfilePicture, Dob FROM msuser WHERE Email like '%".$email."%'";
	//echo $query;
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	

	if($count < 1){
		header('Location: ../searchPerson.php?err=no user found');
	}else{
		//$temp = mysqli_fetch_assoc($result);
		$_SESSION['listUser'] = array();
		
		
		//var_dump($_SESSION);

		
		//$temp = $_SESSION["listUser"];

		while ($temp = mysqli_fetch_assoc($result)) {
			array_push($_SESSION['listUser'], $temp);
		}
		
		// $_SESSION["username"] = $temp["Username"];
		// $_SESSION["email"] = $email;
		// $_SESSION["profilePicture"] = $temp["ProfilePicture"];
		// $_SESSION["dob"] = $temp["Dob"];
		
		header("Location: ../searchPerson.php");
	}
	
 ?>