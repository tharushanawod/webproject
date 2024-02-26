<?php

// require_once 'dbconnection.php';
//  require_once 'authentication.php';
session_start();
$loggeduser =$_SESSION['loggedUser'];

echo $loggeduser;

?>