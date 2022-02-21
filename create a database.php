<?php
// create connection
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
// create database
$createdb= "CREATE DATABASE Firefox2";

if ($connect->query($createdb)===TRUE){
    echo "Successfully create a database";
}else{
    echo "Failed to create database".$connect->error;
}
$connect->close();

