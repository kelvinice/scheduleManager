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
<script type="text/javascript" src="Script/javascriptManageSchedule.js"></script>
<script type="text/javascript" src="Script/jquery-3.3.1.js"></script>
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
    
    $query = "SELECT DAY(ScheduleDate) as Days FROM msschedule WHERE (ScheduleCoOwner = '".$email."' OR ScheduleOwner = '".$email."') AND MONTH(ScheduleDate) = ".$todayMonth." AND YEAR(ScheduleDate) = ".$todayYear;
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
    <table border id="dateTable">

    </table>
    <span id="notes"></span>
</div>
<script type="text/javascript">

    $(".redButton").click(function(){

        var month = document.getElementById("month").value;
        var day = document.getElementById("day").value;
        var year = document.getElementById("year").value;
        var temp = month+"/"+day+"/"+year;
        $.ajax({
            type:"POST",
            url:"get/getSchedule.php",
            data:{
                data1:temp
            },
            success: function(data){
                var tempHasil = JSON.parse(data);

                //$("#notes").text("");
                $("#dateTable").html("<tr>\n" +
                    "            <th>Owner</th>\n" +
                    "            <th>CoOwner</th>\n" +
                    "            <th>Note</th>\n" +
                    "        </tr>");
                for (var i=0;i<tempHasil.length;i++){
                    $("#dateTable").html($("#dateTable").html()+"<tr>\n" +
                        "                    <td>"+tempHasil[i]["ScheduleOwner"]+"</td>\n" +
                        "                    <td>"+tempHasil[i]["ScheduleCoOwner"]+"</td>\n" +
                        "                    <td>"+tempHasil[i]["Note"]+"</td>\n" +
                        "                    </tr>");

                }
            }

        });

    });
    $(".blueButton").click(function () {
        $("#dateTable").html("");
    });

</script>

<br>
<?php
require 'Master/footer.php';
?>
</body>
</html>
