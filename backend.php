<?php

$dbservername = "locahost";
$dbuser = "root";
$dbpassword = "";
$dbname= "aquadb";
    $connection = mysqli_connect($dbservername, $dbuser, $dbpassword, $dbname);
    if($connection){
            echo "Connected Successfully";
        }
    
   
?>