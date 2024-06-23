<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');

}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Skill Learn</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style type="text/css">
	
	.servicebody
	{
		
	}
	
	.col-md-4 {
    width: 50%;
    }
    .col-sm-6{
	width: 50%;	
	}
	.col-xs-12{
		width: 50%;
	}

	
	html
	{
		scroll-behavior: smooth;
	}
	
	.slider-overlay
   {
	width: 100%;
	height: 100%;
	background : rgba(0,0,0,0.6);
   } 

	</style>
</head>

<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="logo">
                    <a href="index.php"><img src="img/LOgo.png" alt="#" /></a>
                  </div>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="#myservice_section">Our Services</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li> <a href="#contactus">Contact Us</a></li>
					<li> <a href="logout.php" >Log Out</a></li>
					<li> <a href="#" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!--- Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<br>
						      <!-- jquery typed effect -->
					<div class="text">		
					
                    </div>		
					  <div class="cta-div">
								<a href="#contactus" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
					</div>
				</div>
			</section>

			<!---Slider Section ends----->
				
         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
			 <div class="col-md-12 text-center">
					<h1><b>Services</b></h1>
					
         			<!-- <div class="section-title text-center">
					 <h1> Services </h1> 
         				<p>
         					These are the services provided by us 
         				</p>
         			</div> -->
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="courses.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the basic tutorials related to programming languages.
         				</p>
         			</div>
         		</div>

				 <div class="col-md-4 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<h3><a href="online_quiz/quizhome.php">EXERCISE</a></h3>   
						<p>
						Here you will find problem programs for practice and their implementation also which will improve your skill
						</p>
					</div>
				</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
			<!---FAQs Section Start------->

			<br><br><br>
			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
								 Here you can see frequently asked questions about website..We will <br>solve that together for sure..
								</p>
								
							</div>
						</div>	


					</div>
				</div> <br><br><br>
				<div class="container " id="#myfaq">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'e-learner');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>
                     

					<div class="panel panel-default">
						<div class="panel-heading" id="headingOne">
							<h4 class="panel-title">
								<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
							</h4>
						</div>
						<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
							<div class="panel-body">
								<p>
									<?php echo $row['faq_answer']; ?>
								</p>
							</div>
						</div>
					</div>

				<?php } ?>


					<div class="panel panel-default">
						<!-- <div class="panel-heading" id="headingOne">
							<h4 class="panel-title">
								<a href="#collapseOne" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
							</h4>
						</div> -->
						<div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne">
							
						</div>
					</div>
					
				</div>
			</div>

			<div class="freeimage" id="meimg">
				<div class="col-md-2 col-md-offset">
					<img src="img/faq1.png">
				</div>
			</div>

		</div>
	</div>
	

</section>
			
			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->

<?php
include("connection.php");
if(isset($_REQUEST['Submit']))
{
 $email=$_POST['email'];
 $feedback=$_POST['feedback']; 

  $iquery="insert into contact_us(ID,email,feedback) 
 values(NULL,'".$email."','". $feedback."')";


 $p1=mysqli_query($con,$iquery); 
 if($p1=1)
 { 
 	echo "<script>alert('Thank you for your feedback.')</script>"; 
 } 
 if($p1=0)
 { 
 echo"not inserted"; 
 } 
 }
?> 			
			<section class="contactus" id="contactus">
				<div class="container">
	<h1 align="center" >Contact Us</h1>
	<div class="sub-heading">
		<p align="center" >
			 Here you can give your valuable feedback ...
		</p>
	</div>
	<hr>

	<form align="center" method="post" enctype="multipart/form-data" onrefresh="return false">
   <label align="center" for="email">Email</label><br>
   <input type="email" name="email" id="email" placeholder="Enter Email" required>

   <br>
   <br> 

   <label align="center"  for="feedback">Message</label><br>
   <textarea type="text" name="feedback" id="feedback" placeholder="Enter Feedback" required></textarea>
 
   <br>
   <br>
   <button type="submit" name="Submit" id="Submit" >Submit<br></button>
<hr>
   <style>
    #Submit{
      background-color: #000890;
      color:white;
      padding:16px 20px;
      margin:8px 0;
      border:none;
      cursor:pointer;
      width: 80px;
      opacity:0.9;
    }
   
    #Submit:hover{
     opacity:1;
   }

   
   </style>
</div>
</section>
</form>

			<!---Contact us Section Ends------->

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
		btn.innerHTML='';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}

</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>


 			<!---footer Section Start	----->

 <style type="text/css">
.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: inline-block; 
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}

    </style>
</head>
<body>

            <!---footer Section Start   ----->

<br><br><br><br>

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
    <br><br>
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.php"></a>
                <p>Skill Learn is an excellent learning hub, dedicated to the programmers who want to explore.</p>
                <!-- Rights-->
                <p class="rights"><span>© </span><span class="copyright-year">2022</span><span> </span><span>Skill Learn</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <!-- <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Nagardas Road, andheri east, mumbai 400101</dd>
              </dl> -->
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">skilllearn@gmail.com</a></dd>
              </dl>
            </div>
          </div>
        </div>
        
      </footer>

 			<!---footer Section Ends	----->

 <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> 

</body>
</html>