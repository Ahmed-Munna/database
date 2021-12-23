<?php

    $server_name = "localhost";
    $user_name = "db_con";
    $user_password = "123456";

    $connect = new mysqli($server_name,$user_name,$user_password);


    if($connect -> connect_error){

        die("Connection failed: ".$connect -> connect_error);
    }


    // Database creation

//     $sql = "CREATE DATABASE whenDB";

//     if($connect -> query($sql) === TRUE){
//         echo "Database create successfully";
//     }else{
//         echo "Error creating database: " . $connect->error;
//     }


// $connect->close();



// $sql = "CREATE DATABASE boomBD";

// if($connect -> query($sql) === TRUE){
//     echo "DATABASE  CREATE SUCCESSFULLY";
// }else{
//     echo "Database create failed".$connect->error;
// }

// $connect->close();



$data = "CREATE DATABASE ZORR";

if($connect -> query($data) === TRUE){
    echo "DATA CREATE SUCCESSFULL";
}else{
    echo "DATA CREATE FAILD".$connect->error;
}


$connect->close();












?>