<?php

$dbservername = "localhost";
$dbuser = "id12529643_rosolution";
$dbpassword = "rosolution";
$dbname= "id12529643_aquadb";
    $connection = mysqli_connect($dbservername, $dbuser, $dbpassword, $dbname);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];

        $query = "insert into contact(Name,Email,Mobile,Message) value('$name','$email','$mobile','$message')";
         $result = mysqli_query($connection, $query);
        if($result){
            header("Location: index.php");
        }else{
            header("Location: contatus.php");
        }
   }
?>

<!-- For Newslwtter section -->

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
   }
   
?>