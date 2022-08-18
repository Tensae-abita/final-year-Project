<?php 
   //calling display_courses() method from manage_courses_class.php
   session_start();

   if (!isset($_SESSION['username'])) {
       header('location:../login.php');
       # code...
   
   }
 
include("admin/classes/manage_courses_class.php");
$courses=new manage_courses_class;			// creating object of  manage_courses_class.php
$course=$courses->display_courses();    //calling display_courses() method from manage_courses_class.php

 

 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
  .li1{
     float: right !important;
  }
 



</style>


<body style="">





<!-- ========================================================================================================================== -->

        <!-- navigation bar starts -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">  <!--  postion relative to align the tab content  -->
  <a class="navbar-brand text-white" href="../index.php">E Learning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-white" href="../programmingdemo.php">programming tutorials</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Services
        </a>
        <div class="dropdown-menu text-white fade" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="programmingdemo.php">Programming Tutorials</a>
          <a class="dropdown-item" href="video tutorials/java/display_video_courses.php">Videos tutorials</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Notices</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

        <!-- navigation bar ends -->
<!-- ========================================================================================================================== -->


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Assignments</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#manage_course">Submit assaigment</a>
  </li>
</ul>
<div class="tab-content">

<div class="tab-pane container active" id="home">



<div >    <!-- list of users starts -->

              <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 1640px;"> 
                
               <!-- table stsrts  -->  <!--  use table-responsive class -->
              <p class="ml-5">List of Assignments</p>
              <thead>
                <tr>
              
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Cource</th>
                  <th scope="col">file</th>
                  

                </tr>
              </thead>
              <tbody style="">

                 <?php 

                   include("admin/classes/admin.php");
                   $admin=new admin;
                   $userd=$admin->display_upAss();
                  
                    foreach ($userd as $userdata) {
                   
                        
                          
                        
                 ?> 
                <tr >
                  <th scope="row"><?php echo $userdata['id']; ?></th>
                  <td ><?php echo $userdata['name']; ?></td>
                  <td><?php echo $userdata['course']; ?></td>
                <td> <?php echo $userdata['file']; ?></td>
                  <td><a href="./download.php?file_id=<?php echo $userdata['id']; ?>">
                  Download

                  </a></td>
                  

                  
                  <td>
                 
                  
                   
                  </td>

                  <!-- <?php
                      
                      if (isset($_REQUEST['delete'])) {
                        echo ('yay sera'); 
                      }
                  ?> -->
                </tr>
               
               <?php } ?>
              </tbody>
            </table>

              <!-- table ends  -->



            </div>
<!-- ============================================================================================================ -->
</div>
                      <!-- php code to display modal if status variable is set -->

                     
  <div class="tab-pane container fade" id="manage_course">
  	



    <center><div class="col-md-7">


<div class="card mt-3 tab-card">
    

      <div class="tab-content" id="myTabContent">   <!-- tab content starts -->


        <!-- ======================================================================================================= -->
              <!-- add new course tab starts -->

        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

          <div class="card-body col-md-12">
            



              <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
        <div class="card-header bg-danger text-light p-2 cardh2"><h3>ADD NEW Assignment</h3></div>
        
        <div class="card-body small" >

        <form method="POST" action="./add_notice.php" enctype="multipart/form-data"> 
                <div>
            <div class="form-group">
              <label><i class="fa fa-user fa-2x"></i>&nbsp name :</label>
              <input type="text" name="notice_name" class="form-control">
                          </div>
              
                              <div class="form group">
                              <select class="form-control" id="exampleFormControlSelect1" name="desc">
                                                      <?php  foreach ($course as $course_list)
                                                          {
                                                                      ?> 
                                                      <option><?php echo  $course_list['language_name']; ?></option>
                                                      <?php } ?>
                              </div>
                         
                              <div  class="mt-4 form-group">
              <label for="pwd">assignment file</label>
              <p style="color: red;">please upload .pdf</p>
              <input type="file" class="form-control" id="c_img" placeholder="Enter Course Image" name="course_image">
              
            </div>
              
              <button type="submit" class="mt-3 btn btn-danger"  name="btn_add">Submit</button>

            </div>
          </form>

      </div>
    </div>
          </div>
        </div>
                        <!-- add new course tab ends -->
      <!-- ======================================================================================================= -->




      <!-- ======================================================================================================= -->
              

                          <!-- delete course tab ends -->
      <!-- ======================================================================================================= -->

      </div>			<!-- tab content  -->
    







        
      </div></center>


</div>


</div>
               <!-- ended display modal php code -->
<!-- =========================================================================================== -->

















  <!-- tab section start -->



  <!-- dropdown list ends -->


      
              <!-- container closed -->

</body>
</html>






