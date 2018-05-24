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
$query = "SELECT * FROM msrequest WHERE Scheduleld = '".$key."'";
$result = mysqli_query($con,$query);
$temp = mysqli_fetch_assoc($result);
$scheduleCoOwner = $temp["ScheduleCoOwner"];;

$scheduleOwner = $temp["ScheduleOwner"];;

$scheduleDate = $temp["ScheduleDate"];
$note = $temp["Note"];

$query = sprintf("INSERT INTO msschedule(ScheduleOwner, ScheduleCoOwner, ScheduleDate, Note) VALUES ('%s','%s','%s','%s')",$scheduleOwner,$scheduleCoOwner,$scheduleDate,$note);

mysqli_query($con,$query);
$query = "DELETE FROM msrequest WHERE Scheduleld = '".$key."'";
mysqli_query($con,$query);

header('Location: ../notification.php');
?>