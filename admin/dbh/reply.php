<?php

require_once 'dbconnection.php';
session_start();
$reply=$_POST['rep'];
$msgID=$_SESSION['msgID'];

        $sql = "UPDATE inbox
                SET reply = '$reply'
                WHERE msgID = '$msgID';";
        $runn = $conn->query($sql);
            

        if($runn){
            echo "set na";
            header('location:../inbox.php');
        }

        
        
        

?>