<?php
require_once 'dbconnection.php';

$aduser = $_POST['adusername'];
$adpwd = $_POST['adpassword'];

$sql = "SELECT * FROM `admindata` WHERE `name` = '$aduser' AND `password` = '$adpwd'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('location:../dash.php');
} else {
    echo "Invalid username or password";
}
?>
