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
    <font size="20">HOME</font>

    <?php
    if(isset($_SESSION["username"]))echo 'Today Agenda :';
    if(isset($_GET['err']))echo "ERROR : ". $_GET['err'] ;
    ?>

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


    <?php
    if(isset($_SESSION["username"])){

        $today = date("Y-m-d");
        echo $today;
        $query = "SELECT * FROM msschedule WHERE (ScheduleCoOwner = '".$email."' OR ScheduleOwner = '".$email."') AND ScheduleDate = '$today'";
		
        $result = mysqli_query($con,$query);
        $count = mysqli_num_rows($result);



        if($count > 0){
        echo'<table border="1">';

        echo'    <tr>';
        echo'        <th>Schedule Owner</th>';
        echo'        <th>Schedule CoOwner</th>';
        echo'        <th>Schedule Date</th>';
        echo'        <th>Note</th>';
        echo'    </tr>';



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
                echo '</tr>';

            }
        echo '</table>';
        }
    }else{
		echo '<br><img src="images/aus copy.jpg" style="width:50%;height:50%">';
	}
        ?>


</div>

<br>
<?php
require 'Master/footer.php';
?>
</body>
</html>
