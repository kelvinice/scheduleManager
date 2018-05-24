<?php
require 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule Manager</title>
    <link rel="stylesheet" type="text/css" href="style 103.css">
</head>
<body>
<?php
require 'header.php';
?>
<script type="text/javascript" src="javascriptnanoreg.js"></script>
<script type="text/javascript" src="javascriptManageSchedule.js"></script>
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




    $today = getdate();
    $todayMonth = $today["mon"];
    $todayYear = $today["year"];
    $dayNumberOfTheMonth=cal_days_in_month(CAL_GREGORIAN,$todayMonth,$todayYear);
    
    $query = "SELECT DAY(ScheduleDate) as Days FROM msschedule WHERE ScheduleCoOwner = '".$email."' OR ScheduleOwner = '".$email."' AND MONTH(ScheduleDate) = ".$todayMonth." AND MONTH(ScheduleDate) = ".$todayMonth;
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    //echo $count;
    $stack = array();
    while ($temp = mysqli_fetch_assoc($result)) {
        array_push($stack, $temp["Days"]);
    }
    echo '<br>'.$todayYear.' '.$today["month"].'<br>';

    for($i=1;$i<=$dayNumberOfTheMonth;$i++){
        if(in_array($i,$stack))
            echo '<input type="button" class="redButton" onclick="setDay(this,'.$i.')" value="'.sprintf('%02u', $i) .'">';
        else
            echo '<input type="button" class="blueButton" onclick="setDay(this,'.$i.')" value="'.sprintf('%02u', $i) .'">';
        if($i%7==0)echo '<br>';
    }

    ?>
    <form method="get" action="do/doAddSchedule.php" onsubmit="return val_form()">
        <?php
        echo '<input type="text" id="year" name="year" class="hidden" value="'.$todayYear.'">';
        echo '<input type="text" id="month" name="month" class="hidden" value="'.$todayMonth.'">';
        echo '<input type="text" id="owner" name="owner" class="hidden" value="'.$email.'">'; ?>
        <input type="text" id="day" name="day" class="hidden">
        Note : <input type="text" id="note" name="note">

        <input type="submit" value="submit">
    </form>
    <label id="errText"></label>
</div>


<br>
<?php
require 'footer.php';
?>
</body>
</html>
