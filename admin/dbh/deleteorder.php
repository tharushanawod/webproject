<?php

require_once 'dbconnection.php';

$rowNum =$_POST['rId'];

$sql="DELETE FROM `reservation` WHERE `rid` = $rowNum;";

$runn = $conn->query($sql);

if($runn){
    header ("location:../reservations.php");
}
else{
    echo "Wrong Number !";
}

?>