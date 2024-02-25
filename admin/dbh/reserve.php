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

        $sql = "SELECT * 
        FROM `signup` 
        RIGHT JOIN `reservation` ON `signup`.`row` = `reservation`.`cId`;";
        // $sql1 = "SELECT * FROM signup";

        $runn = $conn->query($sql);

            //row by row

        if ($runn->num_rows > 0) {
       
        while($row = $runn->fetch_assoc()) {


            // while($row1=($conn->query($sql1))->fetch_assoc()){
            //     if($row['cId']==$row1['row']){
            //         $cname=$row1['fName'];
            //     }
            // }
            echo "<tr><td id ='oNo'>". $row["rid"]. "</td><td id='event'>" . $row["event"]. "</td><td id='customer'>" . $row['fName']. "</td><td id='date'>".$row["date"]."</td><td id='Time'>".$row["time"]."</td></tr>";
            
        }
        } else {
            echo "0 results";  
        }
        $conn->close();
        

?>