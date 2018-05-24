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

$query = "DELETE FROM msrequest WHERE Scheduleld = '".$key."'";
mysqli_query($con,$query);

header('Location: ../notification.php');
?>