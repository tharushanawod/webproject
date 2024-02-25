<?php

$server="localhost";
$userName="root";
$pwd ="";
$dbName="enhanced";

$conn = mysqli_connect($server, $userName, $pwd,$dbName);

    
        // Check
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM signup";
        $runn = $conn->query($sql);
            //row by row

        if ($runn->num_rows > 0) {
       
        while($row = $runn->fetch_assoc()) {
            echo "<tr><td id ='cNo'>". $row["row"]. "</td><td id='fName'>" . $row["fName"]. "</td><td id='lName'>" . $row["lName"]. "</td><td id='email'>".$row["email"]."</td><td id='contact'>".$row["contactNo"]."</td></tr>";
            
        }
        } else {
            echo "0 results";  
        }
        $conn->close();
        

?>