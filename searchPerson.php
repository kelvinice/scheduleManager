<?php
    require 'connect.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule Manager</title>
    <link rel="stylesheet" type="text/css" href="Style/style 103.css">
</head>
<body>
<?php
require 'Master/header.php';
?>

<script type="text/javascript" src="Script/javascriptnanoreg.js"></script>
<div id="core-content">
    <font size="20">Search Person</font>
    <form method="POST" action="do/doSearchPerson.php" >
        <table>
            <tr>
                <td>Email</td>
                <td><input type = "text" id="email" name = "Email"></td>
                <td><label id="errEmail"></label></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Submit" id="button2">
        <br>
    </form>


    <?php
    if(isset($_SESSION["listUser"])){
        //var_dump($_SESSION);
        $temp = $_SESSION["listUser"];
        //var_dump($temp);
        for ($i=0; $i < sizeof($temp); $i++) { 
             echo '<a href="profile.php?key='.$temp[$i]["Email"].'">'.$temp[$i]["Username"].'</a><br>';
        }
        //while ($temp) {
        //   echo $temp["Username"].'<br>';
        //}
    }

    $_SESSION["listUser"] = null;
    if(isset($_GET['err']))echo "ERROR : ". $_GET['err'] ;
    ?>
</div>

<br>
<?php
require 'Master/footer.php';
?>

</body>
</html>
