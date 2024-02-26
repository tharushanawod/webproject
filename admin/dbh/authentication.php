<?php


// require_once '';

$aduser = $_POST['adminName'];
$adpwd = $_POST['adminPwd'];
require_once 'dbconnection.php';

$sql = "SELECT * FROM `admindata` WHERE `name` = '$aduser' AND `password` = '$adpwd'";

$result = $conn->query($sql);
session_start();
if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    $_SESSION['loggedUser']=$user_data['Aname'];

    header('location:../dash.php');
    // echo "monahari";
    exit();
} else {
    echo "Invalid username or password";
}
?>
