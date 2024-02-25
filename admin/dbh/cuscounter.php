<?php

require_once 'dbconnection.php';

$sql="SELECT COUNT(*) AS total_count FROM signup";

$runn = $conn->query($sql);

if($runn){

    $row = $runn->fetch_assoc();

    $total_count = $row['total_count'];
    echo $total_count;

}

?>