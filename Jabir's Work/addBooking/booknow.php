<?php
    require("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnchantedEvents | BookNow</title>
    <link rel ="icon" href ="../index/images/Logo.png">
    <link rel ="stylesheet" href ="booknow.css">
</head>
<body>
    <div class ="container-box">
            <form method ="POST">

                <div class= "twoInOne">
                    <div>
                        Full Name:
                        <br>
                        <input type="text" name="name">
                    </div>

                    <div>
                        Email Address:
                        <br>
                        <input type="email" name ="email">
                    </div>
                </div>

                <div class= "twoInOne">
                    <div>
                        Contact NO:
                        <br>
                        <input type="tel" name = "mobileNo">
                    </div>

                    <div>
                        Event Date:
                        <br>
                        <input type="date" name = "eventDate">
                    </div>
                </div>

                <div class= "twoInOne">
                    <div>
                        Event Starting Time:
                        <br>
                        <select type="text" name="startTime" required="true">
                            <option value="">Select Starting Time</option>
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
                            <option value="10 p.m">10 p.m</option>
                            <option value="12 a.m">12 a.m</option>
                          </select>
                    </div>

                    <div>
                        Event Ending Time:
                        <br>
                        <select type="text" name="endTime" required="true">
                            <option value="">Select Ending Time</option>
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
                            <option value="10 p.m">10 p.m</option>
                            <option value="12 a.m">12 a.m</option>
                          </select>
                    </div>
                </div>
                
                <div class="singleObject">
                    Type of Event:
                    <br>
                    <select type="text" name="eventType" required="true" >
                        <option value="">Choose Event Type</option>
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
                    <textarea name="address" cols="30" rows="4" placeholder=""></textarea>
                </div>

                <div class ="singleObject">
                    Additional Information
                    <br>
                    <textarea name="info" class="form-control" id="info" cols="30" rows="4" placeholder=""></textarea>
                </div>

                <div class="btn-holder">
                    <button type ="submit" class="btn" name ="book">
                        Book
                    </button>
                </div>

        </form>
    </div>

    <?php

    if (isset($_POST['book'])) 
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
        $query = "INSERT INTO tblbooking(Name, Email, MobileNumber, EventDate, EventStartingtime, EventEndingtime, EventType, VenueAddress, AdditionalInformation) VALUES ('$name', '$email', '$mobileNo', '$eventDate','$startTime', '$endTime', '$eventType', '$address', '$info')";

        // Perform the query
        $result = mysqli_query($conn, $query);

        if ($result) 
        {
            echo "<script>alert('Your Booking Was Successful')</script>";
        } 
        else 
        {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
