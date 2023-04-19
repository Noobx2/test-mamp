<?php include_once('conDb.php')?>
<?php

$sql = "UPDATE MyGuests SET lastname='Perroloco' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ./../index.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
header("Location: ./../index.php");
?>