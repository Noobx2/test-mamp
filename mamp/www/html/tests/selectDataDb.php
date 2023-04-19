<?php include_once('conDb.php')?>

<?php 
// Script basico para hacer una consulta a la db
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


  
  $conn->close();
  
echo "<h2><a href='./../index.php'>Volver</a></h2>";