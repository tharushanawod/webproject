<?php

    session_start();
    include('connection.php');

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

    $output = $conn->query("SELECT * FROM  `tblbooking` WHERE `userId` = '$userId'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel ="stylesheet" href ="manage event.css">
    <link rel ="icon" href ="../index/images/Logo.png">
    <title>EnchantedEvents | My Bookings</title>

</head>
<body>
    <div class ="table_btn-container">
        <div class = "table_container">
            <table border ="1">
                <tr>
                    <th>
                        Booking Id
                    </th>

                    <th>
                        Event Date
                    </th>

                    <th>
                        Event Starting Time
                    </th>

                    <th>
                        Event Ending Time
                    </th>

                    <th>
                        Event Type
                    </th>

                    <th>
                        Venue Address
                    </th>

                    <th>
                        Status
                    </th>

                    <th>
                        Actions
                    </th>
                </tr>
                <?php
                    while($row = $output->fetch_assoc())
                    {
                        echo "<tr>";
                            echo "<td>" . $row["BookingId"] . "</td>";                      /*Inside the $row[] we should have give the column names as in our database*/
                            echo "<td>" . $row["EventDate"] . "</td>";
                            echo "<td>" . $row["EventStartingtime"] . "</td>";
                            echo "<td>" . $row["EventEndingtime"] . "</td>";
                            echo "<td>" . $row["EventType"] . "</td>";
                            echo "<td>" . $row["VenueAddress"] . "</td>";
                            echo "<td>" . $row["Status"] . "</td>";
                            echo "<td style='display: flex;'>";

                                // Edit Icon
                                echo "&nbsp;<a href='edit-booking.php?bookingId=" . $row["BookingId"] . "'><i class='fas fa-edit' id='icon'></i></a>&nbsp;&nbsp;&nbsp;";

                                // Delete Icon
                                
                                echo "<form id ='deleteForm' method='post'>"; // Change 'delete-booking.php' to the actual file handling the delete operation
                                echo "<input type='hidden' name='bookingId' value='" . $row["BookingId"] . "'>";
                                echo "<button type='submit' name='delete' style = 'border: none; background: none;'><i class='fas fa-trash' id ='icon'></i></button>";
                                echo "</form>";
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>

    </div>
    
    <?php
        
        if (isset($_POST['delete'])) {

            // Validate and sanitize user input (in this case, the BookingId)
            $bookingId = mysqli_real_escape_string($conn, $_POST['bookingId']);
        
            // Check if the BookingId is a valid integer value
            if ($bookingId > 0) {
        
                // Build the SQL query (without the asterisk *)
                $SQL = "DELETE FROM tblbooking WHERE BookingId = $bookingId";
        
                // Execute the query
                $impact = mysqli_query($conn, $SQL);
        
                // Check the result of the delete operation
                if ($impact) {
                    echo "<script>alert('Your Booking Cancelled Successfully!')</script>";
                } else {
                    echo "<script>alert('Unable to Cancel Your Booking!" . mysqli_error($conn) . "')</script>";
                }
        
                // Close the connection
                mysqli_close($conn);
            } 
            
            else {
                echo "<script>alert('Invalid BookingId.')</script>";
            }
        }
        
        
    ?>
</body>
</html>