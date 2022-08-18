<?php 
  
      //including the users class
              // craeting the object of user class so that we can call show_user_profile() method 

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





<div class="tab-pane container active" id="home">



<div >    <!-- list of users starts -->

              <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 1640px;"> 
                
               <!-- table stsrts  -->  <!--  use table-responsive class -->
              <p class="ml-5">List of Notices</p>
              <thead>
                <tr>
              
                  <th scope="col">id</th>
                  <th scope="col">Notice name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Notice</th>
                  

                </tr>
              </thead>
              <tbody style="">

                 <?php 

                   include("admin/classes/admin.php");
                   $admin=new admin;
                   $userd=$admin->display_notice();
                  
                    foreach ($userd as $userdata) {
                   
                        
                          
                        
                 ?> 
                <tr >
                  <th scope="row"><?php echo $userdata['id']; ?></th>
                  <td ><?php echo $userdata['name']; ?></td>
                  <td><?php echo $userdata['description']; ?></td>
                <td> <?php echo $userdata['notices']; ?></td>
                  <td><a href="./registrar/notice/download.php?file_id=<?php echo $userdata['id']; ?>">
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

                      <!-- php code to display modal if status variable is set -->



               <!-- ended display modal php code -->
<!-- =========================================================================================== -->














</div>


  <!-- tab section start -->



  <!-- dropdown list ends -->


      </div>
      <div class="tab-pane fade" id="menu2">  <!-- show profile tab start -->

     


       </div>
       <div class="tab-pane fade" id="menu3">this is menu 3</div>
       
     
   </div>
              <!-- tab section ends -->
  </div>            <!-- container closed -->

</body>
</html>






