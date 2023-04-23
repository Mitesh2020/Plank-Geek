<?php

$server_name="localhost";
$username="root";
$password="";
$db_name="plant";

$conn = mysqli_connect($server_name, $username, $password,$db_name);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}else{
    echo "Connected Successfully";
}


?>