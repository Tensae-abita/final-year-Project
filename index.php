<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<!----magnific popup css file for work section -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

<!----owlcarousel css file for our team section -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


<!----Linking google fonts-->
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<!----font-awsome start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!----font-awsome ends-->

    <!----css file link-->
<link rel="stylesheet" type="text/css" href="css/index-style.css">

   <!----favicon setting-->
<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!----magnific popup js file for work section -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

<!----owlcarousel js file for our team section -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->
<div id="home">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">E Learning</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#home">Home</a></li>
					<li> <a href='./assignment.php'>Assignment</a></li>
					<li> <a href="online_quize/quizhome.php">Quizes</a></li>
					<li> <a href="./view_notice.php">Notice</a></li>
					
					
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->
            <!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							<div class="cta-div">
								<a href="#contact" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
							<!-- <div class="social-networks">
								<a href="https://www.facebook.com/Unique-Developer-282626055790378/?modal=admin_todo_tour" class="fa fa-facebook"></a>
								<a href="https://twitter.com/SunilYa35862617" class="fa fa-twitter"></a>
								<a href="https://www.instagram.com/unique_developer" class="fa fa-instagram"></a>
								<a href="" class="fa fa-reddit"></a>
								<a href="https://www.linkedin.com/in/sunil-yadav-70b3bb181/" class="fa fa-linkedin"></a>
								<a href="" class="fa fa-cog"></a>
							</div> -->
					</div>
				</div>
			</section>

			<!---Slider Section ends------->
            	<!---Login Start------->

			<!-- <div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div> -->
</div>
         <!---Login Ends------->
          <!---Our Services Section Start------->

          <br><br>
         <div  class="mt-5 container-fluid servicebody" id="myservice_section">
         <div  style="margin-top: 100px;" class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div  class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">EXERCISE</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		
		</div>

        

			<!---Our Services Section Ends------->
            <!-- introduction video section ends -->








			<!---Our Team Section Start------->
		



			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->


<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			<br><br><br>
			

			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->

<div id="contact" style="margin-top: 300px;" class="mt-5 pt-5 row text-center">
	<h2><b>CONTACT US</b></h2><br>
	<center>
	
    <h5 >Email address</h5>
	<h4>tensuabita0@gmail.com</h4>
	<h5 >Phone</h5>
	<h6>+251918208531</h6>

</div></center>
</div>

   
<footer  class="section footer-classic context-dark bg-image" style="background: #2d3246; height:200px;">
   
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span></span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span></span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span></span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span></span></a></div>
        </div>
      </footer>


			<!---Contact us Section Ends------->




 			<!---footer Section Start	----->



 			<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>






<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->
</body>
</html>
