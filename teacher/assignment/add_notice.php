<?php



$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'e-learning');






	$coursename=$_POST['notice_name'];
    $courseimg=$_FILES['course_image'];
    $coursedesc=$_POST['desc'];
if($coursedesc===''){
    $coursedesc=''; 
}
$filename=$courseimg['name'];
print_r($courseimg);		
$fileerror=$courseimg['error'];   
$filetmp=$courseimg['tmp_name'];

$extension=pathinfo($filename,PATHINFO_EXTENSION);

	$destinationfile='../../uploadimg/'.$filename;
	if(move_uploaded_file($filetmp,$destinationfile)){
		$q="insert into up_assignment(file,course,name) values('$filename','$coursedesc','$coursename')";
		$r=mysqli_query($con,$q);

	}
else{
	echo 'not added';
}

	
	

 if ($r==true) {
 header("location:assignment.php?status=added");
    }
	


?>