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



	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,'../../uploadimg/'.$filename);

	$q="insert into notice(notices,description,name) values('$filename','$coursedesc','$coursename')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:notice.php?status=added");
    }
	


?>