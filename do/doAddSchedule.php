<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/10/2018
 * Time: 8:27 PM
 */
    require '../connect.php';
    session_start();
    $scheduleCoOwner = null;
    if(isset($_SESSION["email"])){
        $scheduleCoOwner = $_SESSION["email"];
    }
    $scheduleOwner = $_GET["owner"];
    $scheduleDateString = $_GET["month"] . '/' . $_GET["day"] . '/' . $_GET["year"];
    //echo $scheduleDateString;
    $DateTemp = strtotime($scheduleDateString);
    $scheduleDate = date('Y-m-d',$DateTemp);
    $note = $_GET["note"];

    $query = sprintf("INSERT INTO msrequest(ScheduleOwner, ScheduleCoOwner, ScheduleDate, Note) VALUES ('%s','%s','%s','%s')",$scheduleOwner,$scheduleCoOwner,$scheduleDate,$note);
    mysqli_query($con,$query);

    header('Location: ../index.php');
?>