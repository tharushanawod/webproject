<?php

require_once 'dbconnection.php';

$sql="SELECT * 
        FROM reservation
        ORDER BY rid DESC
        LIMIT 3";

$runn = $conn->query($sql);

if($runn){

    while($row = $runn->fetch_assoc()){
    // $row = $runn->fetch_assoc();
    echo "
            <tr>
                <td>".
                    $row['event']
                ."</td>
                <td>".
                    $row['date']
                ."</td>
                <td>".
                    $row['time']
                ."</td>
            </tr>
    
        ";
    }

}

?>
