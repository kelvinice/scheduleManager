<div id="container">
    <div id="header">
        <img src="images/logo2.png" alt="logo" id="logoImg">
        <?php
        if(isset($_SESSION["username"])){
            echo '<a href="do/doLogout.php"><button type="button" id="button1">Log Out</button></a>';
        }else{
            echo '<a href="login.php"><button type="button" id="button1">Login</button></a>';
            echo '<a href="register.php"><button type="button" id="button1">Register</button></a>';
        }
        ?>

    </div>
</div>

<div class="menu-wrapper">
    <ul class="menu-horizontal">
        <li><a href="index.php">Home</a></li>
        <li>Menu
            <ul class="submenu level-1">
                <li><a href="searchPerson.php">Search Person   </a></li>
                <li><a href="manageSchedule.php">ManageSchedule     </a></li>
                <?php
                if(isset($_SESSION["username"]))
                    echo '<li><a href="profile.php">View Profile</a></li>';
                if(isset($_SESSION["username"]) && $_SESSION["role"] == "Admin")
                    echo '<li><a href="memberList.php">View Member </a></li>';
                ?>
            </ul>
        </li>
        <?php
        if(isset($_SESSION["username"]))
            echo '<li><a href="notification.php">Notification</a></li>';
        ?>
    </ul>
</div>