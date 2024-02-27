<?php
    $conn = mysqli_connect("localhost", "root", "", "enchanted_event");

    if(!$conn)
    {
        echo "<script>alert('Cannot Connect! " . mysqli_connect_error() . "');</script>";
    }
?>

