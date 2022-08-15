<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-learning";

 $name=$_POST['name'];
 $pass=$_POST['password'];
 $email=$_POST['email'];
 $type=$_POST['UserType'];
  $id=$_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$q="select * from login where username='$name' && password='$pass' && type='$type'";
$result=mysqli_query($conn,$q);

$sql = "UPDATE login SET username='$name', email='$email', type='$type', password='$pass' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:manage_users.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



?>