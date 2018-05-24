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
    <font size="20">Register</font>
    <form method="POST" name = "pendaftaranAM" onsubmit="return val_form()" action="do/doRegister.php" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" id="username"></td>
                <td><label id="errUsername"></label></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" id="password"></td>
                <td><label id="errPassword"></label></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type = "email" id="email" name = "Email"></td>
                <td><label id="errEmail"></label></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><input type="text" id="datepicker" name="Dob"></td>
                <td><label id="errBirthday"></label></td>
            </tr>
            <tr>
                <td>Profile Picture</td>
                <td colspan="2"><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Submit" id="button2">
        <br>
    </form>
    <?php
    if(isset($_GET['err']))echo "ERROR : ". $_GET['err'] ;
	//$path = getcwd();
    //echo "Your Absoluthe Path is: ".$path;
    ?>
	
</div>

<br>
<?php
require 'footer.php';
?>
</body>
</html>
