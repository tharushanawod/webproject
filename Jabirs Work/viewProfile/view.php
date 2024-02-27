<?php

session_start();

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "enchanted_event";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];

    // Fetch user details from the database
    $query = "SELECT * FROM `tblusers` WHERE `userId` = '$userId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $userDetails = mysqli_fetch_assoc($result);
            // Now you can use $userDetails to display user information in your HTML
            $userId = $userDetails['userId'];
            $fname = $userDetails['fname'];
            $lname = $userDetails['lname'];
            $email = $userDetails['email'];
            $mobileNo = $userDetails['mobileNo'];
            // Add more fields as needed
        } else {
            // Handle the case when the user with the given ID is not found
            die("User not found");
        }
    } else {
        // Handle the case when there's an error in the database query
        die("Error fetching user details: " . mysqli_error($conn));
    }
} else {
    // Handle the case when 'userId' is not set in the session
    die("User not authenticated");
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="view.css">
    <link rel ="icon" href ="../index/images/Logo.png">
    <title>EnchantedEvents | View Profile</title>

</head>
<body>

<div class="profile-container">
    <img class="profile-picture" src="userIcon.png" alt="Profile Picture">

    <div class="profile-info">

        <span class = "profile-label">
            User ID:
        </span>
        <span>
            <?php 
                echo $userId; 
            ?>
        </span>
        <br><br>

        <div class ="twoObjects">

            <div class = "childOf2">

                <div class="profile-label">
                    First Name:
                </div> 

                <div class="childOf2_2">
                    <?php 
                        echo $fname; 
                    ?>
                </div>

            </div>

            <div class = "childOf2">

                <div class="profile-label">
                    Last Name:
                </div> 

                <div class="childOf2_2">
                    <?php 
                        echo $lname; 
                    ?>
                </div>

            </div>

        </div>

        <div class ="oneObject">

            <div class="profile-label">
                Contact Number:
            </div> 

            <div class="childOf2_2">
                <?php 
                    echo $mobileNo; 
                ?>
            </div>

        </div>

        <div class ="oneObject">

            <div class="profile-label">
                Email Address:
            </div> 

            <div class="childOf2_2">
                <?php 
                    echo $email; 
                ?>
            </div>

        </div>

        <a href ="edit.php">
            <button class = "btn">
                Edit Profile
            </button>
        </a>
     
    </div>
</div>

</body>
</html>
