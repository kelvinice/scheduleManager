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

		$_SESSION['listUser'] = array();

		while ($temp = mysqli_fetch_assoc($result)) {
			array_push($_SESSION['listUser'], $temp);
		}

		header("Location: ../searchPerson.php");
	}
	
 ?>