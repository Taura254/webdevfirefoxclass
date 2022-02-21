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

// create a table
$table= "CREATE TABLE darasa (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($connect->query($createdb)===TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect->close();
