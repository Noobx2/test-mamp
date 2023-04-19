<?php 

$servername = "db";
$username = "root";
$password = "test";
$dataBase ="";

// Create connection
$conn = new mysqli($servername, $username, $password);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>
<?php 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
  

} else {
  echo "Error creating database: " . $conn->error;
}


$conn->close();


echo "<h2><a href='./../index.php'>Volver</a></h2>";

?>