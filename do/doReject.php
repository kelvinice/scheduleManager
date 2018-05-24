<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/10/2018
 * Time: 8:27 PM
 */
require '../connect.php';
session_start();

$key = $_GET["key"];
//$query = "SELECT * FROM msrequest WHERE Scheduleld = '".$key."'";
//$result = mysqli_query($con,$query);
//$temp = mysqli_fetch_assoc($result);
//$scheduleCoOwner = $temp["ScheduleCoOwner"];;
//if(isset($_SESSION["email"])){
//    $scheduleCoOwner = $_SESSION["email"];
//}
//$scheduleOwner = $temp["ScheduleOwner"];;
//$scheduleDateString = $_GET["month"] . '/' . $_GET["day"] . '/' . $_GET["year"];
//$scheduleDate = $temp["ScheduleDate"];
//$note = $temp["Note"];
//echo $scheduleDate;



//$query = sprintf("INSERT INTO msSchedule(ScheduleOwner, ScheduleCoOwner, ScheduleDate, Note) VALUES ('%s','%s','%s','%s')",$scheduleOwner,$scheduleCoOwner,$scheduleDate,$note);
//echo $query;
//mysqli_query($con,$query);
$query = "DELETE FROM msrequest WHERE Scheduleld = '".$key."'";
mysqli_query($con,$query);
//echo "<script type='text/javascript'>alert('sukses insert Schedule');</script>";
header('Location: ../notification.php');
?>