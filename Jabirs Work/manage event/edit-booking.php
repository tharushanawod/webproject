<?php
    session_start();
    require("connection.php");

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

                $fullname = $fname . ' ' . $lname;

                $email = $userDetails['email'];
                $mobileNo = $userDetails['mobileNo'];
            } 
            
            else {
                // To handle the case when the user with the given userId is not found
                die("User not found");
            }
        } 
        
        else {
            // To handle the case when there's an error in the database query
            die("Error fetching user details: " . mysqli_error($conn));
        }
        
    } 
    
    else {
        // To handle the case when 'userId' is not set in the session
        die("User not authenticated");
    }


    // Check if 'bookingId' is set in the URL
    if (isset($_GET['bookingId'])) {
        $bookingId = $_GET['bookingId'];

        // Fetching the details of the booking, using the provided 'bookingId'
        $bookingQuery = "SELECT * FROM `tblbooking` WHERE `BookingId` = '$bookingId'";
        $bookingResult = mysqli_query($conn, $bookingQuery);

        if ($bookingResult) {
            if (mysqli_num_rows($bookingResult) == 1) {

                $bookingDetails = mysqli_fetch_assoc($bookingResult);

                $eventDate = $bookingDetails['EventDate'];
                $eventStart = $bookingDetails['EventStartingtime'];
                $eventEnd = $bookingDetails['EventEndingtime'];
                $eventType = $bookingDetails['EventType'];
                $venue = $bookingDetails['VenueAddress'];
                $addiotional_info = $bookingDetails['AdditionalInformation'];
                
            } else {
                // Handle the case when the booking with the given BookingId is not found
                die("Booking not found");
            }
        } else {
            // Handle the case when there's an error in the database query
            die("Error fetching booking details: " . mysqli_error($conn));
        }
    } else {
        // Handle the case when 'bookingId' is not set in the URL
        die("Booking ID not provided");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnchantedEvents | Update Booking</title>
    <link rel ="icon" href ="../index/images/Logo.png">
    <link rel ="stylesheet" href ="edit-booking.css">
</head>
<body>
    <div class ="container-box">
            <form method ="POST">

                <div class= "twoInOne">
                    <div>
                        Full Name:
                        <br>
                        <input type="text" name="name" value = "<?php echo htmlspecialchars($fullname); ?>">
                    </div>

                    <div>
                        Email Address:
                        <br>
                        <input type="email" name ="email" value = "<?php echo htmlspecialchars($email); ?>">
                    </div>
                </div>

                <div class= "twoInOne">
                    <div>
                        Contact NO:
                        <br>
                        <input type="tel" name = "mobileNo" value = "<?php echo htmlspecialchars($mobileNo); ?>">
                    </div>

                    <div>
                        Event Date:
                        <br>
                        <input type="date" name = "eventDate" value = "<?php echo htmlspecialchars($eventDate); ?>">
                    </div>
                </div>

                <div class= "twoInOne">
                    <div>
                        Event Starting Time:
                        <br>
                        <select type="text" name="startTime" required>
                            <option value="<?php echo htmlspecialchars($eventStart); ?>"><?php echo htmlspecialchars($eventStart); ?></option>
                            <option value="1 a.m">1 a.m</option>
                            <option value="2 a.m">2 a.m</option>
                            <option value="3 a.m">3 a.m</option>
                            <option value="4 a.m">4 a.m</option>
                            <option value="5 a.m">5 a.m</option>
                            <option value="6 a.m">6 a.m</option>
                            <option value="7 a.m">7 a.m</option>
                            <option value="8 a.m">8 a.m"</option>
                            <option value="9 a.m">9 a.m</option>
                            <option value="10 a.m">10 a.m</option>
                            <option value="11 a.m">11 a.m</option>
                            <option value="12 p.m">12 p.m</option>
                            <option value="1 p.m">1 p.m</option>
                            <option value="2 p.m">2 p.m</option>
                            <option value="3 p.m">3 p.m</option>
                            <option value="4 p.m">4 p.m</option>
                            <option value="5 p.m">5 p.m</option>
                            <option value="6 p.m">6 p.m</option>
                            <option value="7 p.m">7 p.m</option>
                            <option value="8 p.m">8 p.m</option>
                            <option value="9 p.m">9 p.m</option>
                            <option value="10 p.m">10 p.m</option>
                            <option value="11 p.m">11 p.m</option>
                            <option value="12 a.m">12 a.m</option>
                          </select>
                    </div>

                    <div>
                        Event Ending Time:
                        <br>
                        <select type="text" name="endTime" required>
                        <option value="<?php echo htmlspecialchars($eventEnd); ?>"><?php echo htmlspecialchars($eventEnd); ?></option>
                            <option value="1 a.m">1 a.m</option>
                            <option value="2 a.m">2 a.m</option>
                            <option value="3 a.m">3 a.m</option>
                            <option value="4 a.m">4 a.m</option>
                            <option value="5 a.m">5 a.m</option>
                            <option value="6 a.m">6 a.m</option>
                            <option value="7 a.m">7 a.m</option>
                            <option value="8 a.m">8 a.m"</option>
                            <option value="9 a.m">9 a.m</option>
                            <option value="10 a.m">10 a.m</option>
                            <option value="11 a.m">11 a.m</option>
                            <option value="12 p.m">12 p.m</option>
                            <option value="1 p.m">1 p.m</option>
                            <option value="2 p.m">2 p.m</option>
                            <option value="3 p.m">3 p.m</option>
                            <option value="4 p.m">4 p.m</option>
                            <option value="5 p.m">5 p.m</option>
                            <option value="6 p.m">6 p.m</option>
                            <option value="7 p.m">7 p.m</option>
                            <option value="8 p.m">8 p.m</option>
                            <option value="9 p.m">9 p.m</option>
                            <option value="10 p.m">10 p.m</option>
                            <option value="11 p.m">11 p.m</option>
                            <option value="12 a.m">12 a.m</option>
                          </select>
                    </div>
                </div>
                
                <div class="singleObject">
                    Type of Event:
                    <br>
                    <select type="text" name="eventType" required >
                    <option value="<?php echo htmlspecialchars($eventType); ?>"><?php echo htmlspecialchars($eventType); ?></option>
                        <?php 
                            $sql2 = "SELECT * FROM tbleventtype";
                            $query2 = mysqli_query($conn, $sql2);

                            while ($row = mysqli_fetch_assoc($query2)) {
                        ?>  
                            <option value="<?php echo htmlentities($row['EventType']);?>"><?php echo htmlentities($row['EventType']);?></option>
                        <?php } ?>
                    </select>

                </div>
                

                <div class="singleObject">
                    Venue Address:
                    <br>
                    <textarea name="address" cols="30" rows="4" placeholder="" required><?php echo htmlspecialchars($venue); ?></textarea>
                </div>

                <div class ="singleObject">
                    Additional Information
                    <br>
                    <textarea name="info" class="form-control" id="info" cols="30" rows="4" placeholder=""><?php echo htmlspecialchars($addiotional_info); ?></textarea>
                </div>

                <div class="btn-holder">
                    <button type ="submit" class="btn" name ="update">
                        Update
                    </button>
                </div>

        </form>
    </div>

    <?php

    if (isset($_POST['update'])) 
    {
        // Sanitize user inputs to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $email  = mysqli_real_escape_string($conn, $_POST['email']);

        $mobileNo = mysqli_real_escape_string($conn, $_POST['mobileNo']);

        $eventDate = mysqli_real_escape_string($conn, $_POST['eventDate']);

        $startTime = mysqli_real_escape_string($conn, $_POST['startTime']);

        $endTime= mysqli_real_escape_string($conn, $_POST['endTime']);

        $eventType = mysqli_real_escape_string($conn, $_POST['eventType']);

        $address = mysqli_real_escape_string($conn, $_POST['address']);

        $info = mysqli_real_escape_string($conn, $_POST['info']);


        // Query to insert data into the database
        
        $query = "UPDATE tblbooking SET Name = '$name', Email = '$email', MobileNumber = '$mobileNo', EventDate = '$eventDate', EventStartingtime = '$startTime', EventEndingtime = '$endTime', EventType = '$eventType', VenueAddress = '$address', AdditionalInformation = '$info' WHERE BookingId = $bookingId";
        
        // Perform the query
        $result = mysqli_query($conn, $query);

        if ($result) 
        {
            echo "<script>alert('Your Booking Was Updated Successfully')</script>";
            echo "<script>window.location.href='manage event.php';</script>";
                
            exit;
        } 
        else 
        {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
