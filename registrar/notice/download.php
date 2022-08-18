<?php
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
 if(isset($_GET['file_id'])){
  
  $id=$_GET['file_id'];
echo $id;
  $sql="SELECT * FROM notice WHERE id='$id'";
  $result=mysqli_query($con,$sql);
  $file=mysqli_fetch_assoc($result);
  $filepath='../../uploadimg/'.$file['notices'];
  echo $filepath;
 if(file_exists($filepath)){

  header('Content-Type:application/octet-stream');
  header('Content-Description:File Transfer');
  header('Content-Disposition: attachment;filename=' .basename($filepath));
  header('Expires:0');
  header('Cache-Control:must-revalidate');
  header('Pragma:public');
  header('Content-Length:'.filesize('../../uploadimg/'.$file['notices']));
  readfile('../../uploadimg/'.$file['notices']);
 }else{
  echo "not here";
 }

 
 }
 ?>