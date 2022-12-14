<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

    <!-- bootstrap CDN files -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <!--  font awsome cdn -->
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- 		css starts -->
<style type="text/css">
    

   .sidebar-list
   {
       margin-right: -15px;
       
       font-family: 'Quicksand', sans-serif; 
       font-size: 14px
   }

   .sidebar-list li:hover
   {
     background-color: deepskyblue !important;
   }
    .sidebar-list li a
    {
       color:white;
       text-decoration: none;
    }
    .card1
    {
        font-family: 'Open Sans', sans-serif;
    }
    .cardh2
    {
        font-family: 'Lato', sans-serif;

    }



    /***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

/***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

body {
   background-color: #f7f8f9;
}

.card {
   background-color: #ffffff;
   border: 1px solid rgba(0, 34, 51, 0.1);
   box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
   border-radius: 0.15rem;
}

/* Tabs Card */

.tab-card {
 border:1px solid #eee;
}

.tab-card-header {
 background:none;
}
/* Default mode */
.tab-card-header > .nav-tabs {
 border: none;
 margin: 0px;
}
.tab-card-header > .nav-tabs > li {
 margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
 border: 0;
 border-bottom:2px solid transparent;
 margin-right: 0;
 color: #737373;
 padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
   border-bottom:2px solid #007bff;
   color: #007bff;
}
.tab-card-header > .nav-tabs > li > a:hover {
   color: #007bff;
}

.tab-card-header > .tab-content {
 padding-bottom: 0;
}


</style>
</head>
<body onload="">

<!-- ========================================================================================================================== -->

                <!-- navigation bar starts -->

 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
 <a class="navbar-brand text-white" href="../admin_main.php"><?php echo $_SESSION['username']; ?></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto ">
     <li class="nav-item active">
       <a class="nav-link text-white" href="../admin_main.php">Home <span class="sr-only">(current)</span></a>
     </li>
    
   </ul>
   <form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
 </div>
</nav>

               <!-- navigation bar ends -->
<!-- ========================================================================================================================== -->




<div class="container-fluid" style="margin-top: 50px;" >
     <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->




       <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
        <ul class="list-group text-white sidebar-list">
          
        <li class="list-group-item bg-dark"><a href="">Manage Users</a></li>
            <li class="list-group-item bg-dark "><a href="../manage_courses/manage_courses.php">Manage Courses</a></li>
          
            
            <li class="list-group-item bg-dark"><a href="../notice/notice.php">manage notice</a></li>
            <li class="list-group-item bg-dark"><a href="../../logout.php">Logout</a></li>
            <li class="list-group-item bg-dark" style="height: 400px;"></li>
         </ul>
       </div>



       
       <div class="col-md-10 ">

<div class="card mt-3 tab-card">
      

        <div class="tab-content" id="myTabContent">   <!-- tab content starts -->


        	<!-- ======================================================================================================= -->
        				<!-- add new course tab starts -->

          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2 cardh2"><h3>EDIT</h3></div>
				  
				  <div class="card-body small" ">

				  <form method="POST" action="./edit.php"> 
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>&nbspUsername :</label>
								<input type="text" name="name" placeholder="<?php echo $_POST['name'] ?>" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>&nbspPassword :</label>
								<input type="text" name="password" placeholder="<?php echo $_POST['pass'] ?>" class="form-control" id="pwd">

								<label><i class="fa fa-user fa-2x"></i>&nbspConfirm Password :</label>
								<input type="text" name="confirm_password" placeholder="<?php echo $_POST['pass'] ?>" class="form-control" id="cpwd">
                                    
								<label><i class="fa fa-lock fa-2x"></i>&nbspEmail id :</label>
								<input type="text" name="email" placeholder="<?php echo $_POST['email'] ?>" class="form-control">
								<div id="errorlabel"></div>
                <label for="">Select User type</label><br>
                <select name="UserType" style="width: 100px;">
                  <option value="Student">Student</option>
                  <option value="Admin">Admin</option>
                  <option value="Teacher">Teacher</option>
                  <option value="Registrar">Registrar</option>
                  <option value="Academic Head">Academic Head</option>
                
                </select>
                <input  type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

                <center>
                <button type="submit"  class="mt-5 btn btn-primary"  name="btn_add">UPDATE</button>

                </center>

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
      



<div>



  				
  		






       <script type="text/javascript">
	
       $(document).ready(function(){
       
       $('#cpwd').keyup(function(){
           var pwd=$('#pwd').val();
           var cpwd=$('#cpwd').val();
           if (cpwd!=pwd) 
           {
               $('#errorlabel').html('**password are not matched');
               $('#errorlabel').css('color','red');
               return false;
           }
           else
           {
               $('#errorlabel').html('');
               return true;
           }
       });
       
       });
       
       </script>
       
       <script type="text/javascript">
           
       
           $('#myTab a').on('click', function (e) {
         e.preventDefault()
         $(this).tab('show')
       });
       // =============================================================================================================
                           // javascript validation function
       
           function validation()
           {
               var name=document.getElementById('c_name').value;
               var desc=document.getElementById('c_desc').value;
               var img=document.getElementById('c_img').value;
               if (name=="")
               { 
                   document.getElementById('name_error').innerHTML="** please enter the user name";
                   return false;
       
               }
       
               if (desc=="")
               { 
                   document.getElementById('desc_error').innerHTML="** please enter the password";
                   return false;
       
               }
               if (img=="")
               { 
                   document.getElementById('image_error').innerHTML="** please re enter password   ";
                   return false;
       
               }
           }
                           // javascript validation function
       // =============================================================================================================
       
       
       // =============================================================================================================
                       
                           // javascript modal function called on page load
       
               function display_modal()
               {
       
                   
       
               }
       
       // =============================================================================================================
       
       
                           
       // =============================================================================================================
                       
                           // javascript modal function called on page load
       
                $(window).on('load',function(){
               $('#myModal').modal('show');
           });
       
       
                          // javascript validation function
       // =============================================================================================================
       
       </script>
       
       
        </body>
        </html>
