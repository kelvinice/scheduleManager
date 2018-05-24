<?php 
	require '../connect.php';
	$username =  $_POST["Username"];
	$password = $_POST["Password"];
	$email =  $_POST["Email"];

	$role = "Member";

	$query = "SELECT * FROM msuser WHERE Email = '".$email."'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	//echo $count;
	if($count > 0){
		header('Location: ../register.php?err=Email%20already%20used');
	}
    $path = getcwd();
    $path = str_replace("\do","/",$path);

	//file uploading start
    $target_dir = $path."/images/profilePicture/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $nameOfFile = $target_dir . $email .'.'. $imageFileType;

    //echo $nameOfFile;

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $nameOfFile)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    //file uploading end

    $nameOfFile = $email .'.'. $imageFileType;
    $tempDate = strtotime($_POST['Dob']);
    $birthDate = date('Y-m-d',$tempDate);
	$query = sprintf("INSERT INTO msuser(Username, Password, Email, ProfilePicture, Role, Dob) VALUES ('%s','%s','%s','%s','%s', '%s')",$username,$password,$email,$nameOfFile,$role,$birthDate);


	if (mysqli_query($con, $query)) {
    //echo "New record created successfully";
	} else {
	    //echo "Error: " . $query . "<br>" . mysqli_error($con);
	}
	header("Location: ../index.php");

 ?>