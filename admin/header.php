<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="script.js"></script>
    <title>Admin - ENHANCED</title>
</head>
<body>
    <section>
        <div class="hero">
            <div class="nav">
                <div class="user">
                    <img src="./source/user.png">
                    <span>
                        <?php
                            require_once "./dbh/session.php";
                        ?>
                        <!-- UOC User -->
                    <p>Administrator</p></span>
                </div>
                <div class="navigations">
                    <ul>
                        <li><a href="dash.php"><img src="./source/vector(1).png" />    Dashboard</a></li>
                        <li><a href="reservations.php"><img src="./source/vector.png" />    Reservations</a></li>
                        <li><a href="customer.php"><img src="./source/vector(2).png" />    Customers</a></li>
                        <li><a href="inbox.php"><img src="./source/vector5.png" />    Inbox</a></li>
                        <li><a href="guidlines.php"><img src="./source/vector(3).png" />    Guidlines</a></li>
                        <li><a href="./dbh/logout.php"><img src="./source/vector(5).png" />    Logout</a></li>
                    </ul>
                </div>
                <div class="footer">
                    <center>
                    All Rights Reserved by UCSC © 2024
                    </center>
                </div>
            </div>
            <div class="body">
                <div class="topbar">
                    <!-- <div id="clock">
                    </div> -->
                    <a href="../" target="_BLANK" alt="Redirrect to Home Page"><img src="./source/user.png" alt="Redirrect to Home Page" ></a>
                    <div class="log">
                        <center>
                        <span>UOC User</span>
                        <p><a href="http://">Logout</a></p>
                        </center>
                    </div>
                </div>   