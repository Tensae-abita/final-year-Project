<?php 

session_start();


// $con=mysqli_connect('localhost','root');

// if ($con) 
//   {
// 		echo "connection successful";
//   }
// else
// 	{
// 		echo "no connection";
// 	}


$conn = mysqli_connect('localhost', 'root');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 mysqli_select_db($conn,'e-learning');

 $name=$_POST['name'];
 $pass=$_POST['password'];
 $pass=md5($pass);
 $email=$_POST['email'];
 $type=$_POST['UserType'];
 $dep=$_POST['department'];

 if($type=="Student"){
	$dep=$_POST['department'];
 }else{
	$dep='';
 }


 $q="select * from login where username='$name' && password='$pass' ";

 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
 	echo "duplicate data";
 	
 }
 else{


	$sql = "INSERT INTO login (username, password, email,type,department)
	VALUES ('$name', '$pass', '$email','$type','$dep')";
	
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	  header('location:head.php');
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
 }


$conn->close();



 ?>