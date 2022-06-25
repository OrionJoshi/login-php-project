<?php 

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login_php_mysql";

// connecting database 
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

//checking database connection
if($conn -> connect_errno){
    echo "Failed to connect to Database: " . $conn -> connect_error;
    exit();
}