<?php

   $dbservername = "localhost";
   $dbuser = "root";
   $dbpassword = "";
   $dbname = "test_db";

   $connection = mysqli_connect($dbservername, $dbuser, $dbpassword, $dbname);

   if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['password'];

        $query = "insert into demo(Username,Password,Date) values('$username', '$password','$time')";
        $result = mysqli_query($connection, $query);
        if($result){
            echo "Data inserted succescfully";
        }else{
            echo "Something Went Wrong";
        }
   }
   else{
       echo "something went wrong";
   }



##########slectring data from DATABASE ##################
//    if($connection){
     
//     $query = "select * from demo";
//     $result = mysqli_query($connection, $query);
//     // print_r($result);
//     if(mysqli_num_rows($result )> 0){
//         echo "<pre>";
//         print_r(mysqli_fetch_assoc($result));
//         echo "</pre>";
//     }
//    }
//    else{
//        echo "something went weong";
//    }

?>