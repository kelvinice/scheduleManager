<?php
	require 'connect.php';
	session_start();
?>
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
    <font size="20">Member List</font><br>

    <?php
		if(!isset($_SESSION["username"]) || $_SESSION["role"] != "Admin") //not login or not admin
			header("Location: index.php");

		$query = "SELECT * FROM msuser";
		$result = mysqli_query($con,$query);


		
    ?>

	<table border="1">
   
		<tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Profile Picture</th>
            <th>Role</th>        
        </tr>

        
		<?php
		while ($temp = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo'	<td>';
			echo $temp["Username"];		
			echo'	</td>';
			echo'	<td>';
			echo $temp["Password"];		
			echo'	</td>';
            echo'   <td>';
            echo $temp["Email"];     
            echo'   </td>';
            echo'   <td>';
            echo $temp["Dob"];     
            echo'   </td>';
            echo'   <td>';
            echo '<img src="images\profilePicture\\'.$temp["ProfilePicture"].'" style="width: 100px;height: 100px;">';     
            echo'   </td>';
            echo'   <td>';
            echo $temp["Role"];     
            echo'   </td>';
			echo '</tr>';

		}
		?>
	</table>
	
</div>

<br>
<?php
require 'footer.php';
?>
</body>
</html>
