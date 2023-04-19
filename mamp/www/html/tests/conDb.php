<?php 

$servername = "db";
$username = "root";
$password = "test";
$dataBase ="myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dataBase);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>

