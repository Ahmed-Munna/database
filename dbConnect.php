<?php

// $server_name = "localhost";
// $user_name = "db_con";
// $db_password = "123456";
// $db_name = "admin";

// $connnect = new mysqli($server_name,$user_name,$db_password,$db_name);

// if($connnect-> connect_error){
//     die("Connection failed: ". $connect->connect_error);
// }
// echo "Connected Successfully";

// $server_name = "localhost";
// $user_name = "db_con";
// $db_password = "123456";
// $db_name = "admin";

// $connnect = mysqli_connect($server_name,$user_name,$db_password,$db_name);

// if($connnect -> connect_error){

//     die("Connection failed: ". $connnect -> connect_error);
// }

// echo "Connection Successfull";



// $server_name = "localhost";
// $user_name = "db_con";
// $db_password = "123456";
// $db_name = "admin";

// $connect = new mysqli($server_name,$user_name,$db_password,$db_name);

// if($connect -> connect_error){
//     die("Connected failed: ".$connect -> connect_error);
// }

// echo "Connection Successfull";

$server_name = "localhost";
$user_name = "db_con";
$db_password = "123456";
$db_name = "admin";


$connect = mysqli_connect($server_name,$user_name,$db_password,$db_name);

if($connect -> connect_error){
    die("Connected faild: ".$connect -> connect_error);
}

echo "Connected successfull";













?>