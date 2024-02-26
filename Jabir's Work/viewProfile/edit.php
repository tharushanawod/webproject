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
            $password = $userDetails['password'];
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="edit.css">
    <link rel ="icon" href ="../index/images/Logo.png">
    <title>EnchantedEvents | Edit Profile</title>

</head>
<body>

    <div class="profile-container">
        <img class="profile-picture" src="userIcon.png" alt="Profile Picture">

        <div class="profile-info">
            <form method ="POST">

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
                            New First Name:
                        </div> 

                        <div class = "inputHolder">
                            <input type = "text" name = "new_fname" placeholder ="Enter new first name" >
                        </div>

                    </div>

                </div>

                <div class ="twoObjects">

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

                    <div class = "childOf2">

                        <div class="profile-label">
                            New Last Name:
                        </div> 

                        <div class = "inputHolder">
                            <input type = "text" name = "new_lname" placeholder ="Enter new last name" >
                        </div>

                    </div>

                </div>

                <div class ="twoObjects">

                    <div class = "childOf2">

                        <div class="profile-label">
                            Contact Number:
                        </div> 

                        <div class="childOf2_2">
                            <?php 
                                echo $mobileNo; 
                            ?>
                        </div>

                    </div>

                    <div class = "childOf2">

                        <div class="profile-label">
                            New Contact Number:
                        </div> 

                        <div class = "inputHolder">
                            <input type = "text" name = "new_mobileNo" placeholder ="Enter new contact number" >
                        </div>

                    </div>

                </div>

                <div class ="twoObjects">

                    <div class = "childOf2">

                        <div class="profile-label">
                            Email Address:
                        </div> 

                        <div class="childOf2_2">
                            <?php 
                                echo $email; 
                            ?>
                        </div>

                    </div>

                    <div class = "childOf2">

                        <div class="profile-label">
                            New Email Address:
                        </div> 

                        <div class = "inputHolder">
                            <input type = "text" name = "new_email" placeholder ="Enter new email address" >
                        </div>

                    </div>

                </div>

                <div class ="twoObjects">

                    <div class = "childOf2">

                        <div class="profile-label">
                            Password:
                        </div> 

                        <div class = "inputHolder">

                            <input type = "password" name = "oldPwd" id ="oldPwd" value="<?php echo $password; ?>" onclick="togglePasswordVisibility()" readonly>
                            
                        </div>

                        
                        
                        

                    </div>

                    <div class = "childOf2">

                        <div class="profile-label">
                            New Password:
                        </div> 

                        <div class = "inputHolder">
                            <input type = "password" name = "new_pwd" placeholder ="Enter new password" >
                        </div>

                    </div>

                </div>

                <button class = "btn" name = "update" type = "submit">
                    Update
                </button>
                
            </form>
        
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("oldPwd");

            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>

    <?php

        if (isset($_POST['update'])) {
            $newFname = $_POST['new_fname'];
            $newLname = $_POST['new_lname'];
            $newMobileNo = $_POST['new_mobileNo'];
            $newEmail = $_POST['new_email'];
            $newPassword = $_POST['new_pwd'];

            $sql = "UPDATE tblusers SET fname ='$newFname', lname ='$newLname', mobileNo ='$newMobileNo', email ='$newEmail', password ='$newPassword' WHERE userId ='$userId'";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Your Profile Was Updated Successfully!')</script>";

                echo "<script>window.location.href='view.php';</script>";
                
                exit;
            } else {
                echo "<script>alert('Oops Something Went Wrong!')</script>". $conn->error;
            }
        }

    ?>
</body>
</html>
