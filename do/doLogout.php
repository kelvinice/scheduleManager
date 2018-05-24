<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/1/2018
 * Time: 8:10 AM
 */

session_start();
session_unset();
session_destroy();

header('Location: ../index.php');