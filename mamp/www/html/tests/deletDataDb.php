<?php include_once('conDb.php')?>
<?php

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: ./../index.php");