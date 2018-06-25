<?php
	require 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule Manager</title>
    <link rel="stylesheet" type="text/css" href="Style/style 103.css">
    <link rel="stylesheet" href="Style/jquery-ui.css">
    <script src="Script/jquery-1.12.4.js"></script>
    <script src="Script/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body>
<?php
require 'Master/header.php';
?>
<script type="text/javascript" src="Script/javascriptnanoreg.js"></script>
<div id="core-content">
    <?php
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        $email = $_SESSION["email"];
        $dob = $_SESSION["dob"];
        $role = $_SESSION["role"];
        $profilePicture = $_SESSION["profilePicture"];

    }
    if (isset($_GET["key"])) {
        $email = $_GET["key"];
        $query = "SELECT Username, Role, ProfilePicture, Dob FROM msuser WHERE Email = '".$email."'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if($count != 1){
            header('Location: ../profile.php?err=Email not found');
        }
        $temp = mysqli_fetch_assoc($result);
        $username = $temp["Username"];
        $dob = $temp["Dob"];
        $role = $temp["Role"];
        $profilePicture = $temp["ProfilePicture"];
    }
    ?>
    <font size="20">Notification List</font><br>

    <?php
		if(!isset($_SESSION["username"])) //not login or not admin
			header("Location: index.php");

		$query = "SELECT * FROM msrequest WHERE ScheduleOwner = '".$email."'";
		$result = mysqli_query($con,$query);

    ?>

	<table border="1">
   
		<tr>
            <th>Schedule Owner</th>
            <th>Schedule CoOwner</th>
            <th>Schedule Date</th>
            <th>Note</th>
            <th>Approve</th>
            <th>Reject</th>
        </tr>

        
		<?php
		while ($temp = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo'	<td>';
			echo $temp["ScheduleOwner"];
			echo'	</td>';
			echo'	<td>';
			echo $temp["ScheduleCoOwner"];
			echo'	</td>';
            echo'   <td>';
            echo $temp["ScheduleDate"];
            echo'   </td>';
            echo'   <td>';
            echo $temp["Note"];
            echo'   </td>';
            echo'   <td>';
            echo '<a href="do/doApprove.php?key='.$temp["Scheduleld"].'" style="color: red">Approve </a> ';
            echo'   </td>';
            echo'   <td>';
            echo '<a href="do/doReject.php?key='.$temp["Scheduleld"].'" style="color: red">Reject </a> ';
            echo'   </td>';
			echo '</tr>';

		}
		?>
	</table>
	
</div>

<br>
<?php
require 'Master/footer.php';
?>
</body>
</html>

