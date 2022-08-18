<?php
$id = $_POST["id"];


// Create connection
$conn = new mysqli('localhost', 'root', '','e-learning');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// sql to delete a record
$sql = "DELETE FROM notice WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location:notice.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
