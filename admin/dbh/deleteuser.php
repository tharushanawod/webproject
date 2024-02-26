<?php

require_once 'dbconnection.php';

$rowNum =$_POST['cId'];

$sql="DELETE FROM `signup` WHERE `row` = $rowNum;";

$runn = $conn->query($sql);

if($runn){
    header ("location:../customer.php");
}
else{
    echo "Wrong Number !";
}

?>