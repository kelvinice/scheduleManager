<?php
require '../connect.php';
session_start();

$email = $_SESSION["email"];

$temp = $_POST['data1'];


//echo $scheduleDateString;
$DateTemp = strtotime($temp);
$scheduleDate = date('Y-m-d',$DateTemp);


$query = "SELECT * from msschedule WHERE (ScheduleCoOwner = '".$email."' OR ScheduleOwner = '".$email."') AND ScheduleDate = '$scheduleDate'";
$result = mysqli_query($con,$query);;

$temp3 = array();
while ($temp2 = mysqli_fetch_assoc($result)){
    array_push($temp3,$temp2);
}



echo json_encode($temp3);
//echo $scheduleDate;
//echo "<script type='text/javascript'>alert('sukses insert Schedule');</script>";
