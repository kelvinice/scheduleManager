<!DOCTYPE html>
<html>
<head>
    <title>Schedule Manager</title>
    <link rel="stylesheet" type="text/css" href="style 103.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <script src="jquery-1.12.4.js"></script>
    <script src="jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body>
<?php
require 'header.php';
?>
<script type="text/javascript" src="javascriptnanoreg.js"></script>
<div id="core-content">
    <font size="20">Login</font>
    <form method="POST" action="do/doLogin.php" >
            <table>
            <tr>
                <td>Email</td>
                <td><input type = "email" id="email" name = "Email"></td>
                <td><label id="errEmail"></label></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" id="password"></td>
                <td><label id="errPassword"></label></td>
            </tr>


        </table>

        <br>
        <input type="submit" value="Submit" id="button2">
        <br>
    </form>
    <?php
    if(isset($_GET['err']))echo "ERROR : ". $_GET['err'] ;
    ?>
</div>

<br>
<?php
require 'footer.php';
?>
</body>
</html>
