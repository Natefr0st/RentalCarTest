<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "rental_car";
//Connect to MySQL
$conn = mysqli_connect($server, $user, $pass, $db);
//Check Connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connection_error();
}


?>