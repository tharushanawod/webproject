<?php

require_once 'dbconnection.php';
 //session_start();
        // $sql = "SELECT * FROM inbox";

        // $sql = "SELECT * 
        // FROM `inbox` 
        // RIGHT JOIN `signup` ON `inbox`.`msgId` = `signup`.`cId`;";

        $sql="SELECT * FROM `inbox` LEFT JOIN `signup` ON `inbox`.`cId` = `signup`.`row`;";
        $runn = $conn->query($sql);
            //row by row

        if ($runn->num_rows > 0) {
       
        while($row = $runn->fetch_assoc()) {
            echo "<tr><td>". $row["msgID"]. "</td><td>" . $row["cId"]."</td><td>" . $row["fName"]."</td><td>". $row["msg"];
            if($row['reply']==null){
                echo '<td id="reply"><form action="dbh/reply.php" method="POST"><input type="text" name="rep" id="" width ="380px">
                            <button type="submit">Reply</button></form>
                            </td>';
                            $_SESSION['msgID']=$row["msgID"];

            }else{
                echo "<td>".$row['reply']."</td>";
            }
        }
        } else {
            echo "0 results";  
        }
        $conn->close();
        

?>