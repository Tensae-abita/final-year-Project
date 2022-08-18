<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'e-learning');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $pass=md5($pass);
 $email=$_POST['email'];

 $q="select * from login where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {

  	if ($res['type']=='Admin') 
  	{
		$_SESSION['username'] = $res['username'];

  		header("location:admin/admin_main.php");
  		
  	}else if ($res['type']=='Student') 
  	{
		$_SESSION['username'] = $res['username'];
  		header("location:index.php");
  		
  	}else if ($res['type']=='Teacher') 
  	{
		$_SESSION['username'] = $res['username'];

  		header("location:teacher/teacher.php");
  		
  	}else if ($res['type']=='Registrar') 
  	{
		$_SESSION['username'] = $res['username'];

  		header("location:registrar/registrar.php");
  		
  	}else if ($res['type']=='Academic Head') 
  	{
		$_SESSION	['username'] = $res['username'];

  		header("location:academic_head/head.php");
  		
  	}
  	
 }
 else
 {
 	$_SESSION['error']="error";
 	header('location:login.php');

 }





 ?>