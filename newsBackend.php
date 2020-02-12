<?php

$dbservername = "localhost";
$dbuser = "id12529643_rosolution";
$dbpassword = "rosolution";
$dbname= "id12529643_aquadb";
    $connection = mysqli_connect($dbservername, $dbuser, $dbpassword, $dbname);
    if(isset($_POST['button'])){
        $email = $_POST['email'];

        $q = "insert into news(Email) value('$email')";
        $res = mysqli_query($connection, $q);
        if($res){
            header("Location: index.php");
        }else{
            echo "Something Went Wrong With Database..!!";
        }
   }else{
       header("Location: footer.php");
   }
   
?>