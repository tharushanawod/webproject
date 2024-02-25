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
?>