<?php
$myserver="localhost";
$Username="root";
$pass="";
// creating connection using object oriented way.
$connect=new mysqli($myserver, $Username, $pass);

if ($connect->connect_error){
    dio("failed to connect to database".$connect->connect_error);
}else{
    echo "Successfully connected to database";
}

