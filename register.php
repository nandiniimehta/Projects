<?php
include("connection.php");

session_start();


?>

<html>
<head>
<meta name="viewport"
content="width=device,initial-scale=1">
<style>
<body {
		font-family:Arial,Helvetica,sans-serif;
		background-color:#3CB371 ;
		}
	*{
	   box: sizing 700px;
	 }
/*Add padding to containers*/
.container{
padding:16px;
spacing: 16px;
background-color:white;
text-align:left;

}

/*Full-width input fields*/
input[type=text],input[type=password]{
width: 50%;
padding: 15px;
margin:5px 0 22px 0;
display:flex;
border:none;
background:#f1f1f1;
}
 input[type=text]:focus,
 input[type=password]:focus{
 background-color:#ddd;
 outline:none;
 }
  
/* set a style for the submit button*/
.submit{
background-color: #000890;
color:white;
padding:16px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width: 100px;
opacity:0.9;
}
.submit:hover{
opacity:1;
}

/*Add a blue text color to link*/
a{
  color:dodgerblue;
  }
  
  /*set a grey background color and center the text of the "sing in" section*/
  .signin{
  /* background-color:#f1f1f1; */
  text-align:left;
  }

  
  </style>
  </head>
  <body>
	<?php
      
  include ('includes/header.php');
  include ('includes/navbar.php');
	?>
	<br>
	<br>
	<br>
	
  <form method="post" enctype="multipart/form-data">
  <div  class="container" align="center">
  <h1>Register Here..</h1>
  <!-- <p> Please fill this form to create an account.</p> -->
  <hr>
   
   <label for ="firstname"><b>First name</b>
   </label>
   <input type="text"  placeholder="Enter your first name" name="firstname" required>
   
   <label for ="lastname"><b>Last name</b>
   </label>
   <input type="text"  placeholder="Enter your last name" name="lastname" required>
   
   <label for ="username"><b>Username</b>
   </label>
   <input type="text"  placeholder="Enter your username" name="username" required>
   
   <label for ="password"><b>Password</b>
   </label>
   
    <input type="password" placeholder="Enter password" name="password" required >

	<label for="cpassword"><b>Confirm password</b></label>
	 
	
	<input type="password" placeholder="Confirm Password" name="cpassword" required >
	
	<label for ="email"><b>Email</b>
   </label>
   <input type="text"  placeholder="Enter your email" name="email" required>
   
   	<button type="submit" class="submit" name="submit">Submit</button>
   
	<hr>
	<!--<p> By creating an account you agree to our<a href="#"> Terms & Privacy</a></p>-->
	
	</div>
	
	<div align="center" class="container signin">
	<p> Already have an account?<a href="login.php">Log In </a></p>
	</div>
	</form> 
	
	</body>
	</html>


	<?php 

include ('connection.php');

//error_reporting(0);

// session_start();

if (isset($_SESSION['username'])) {
    // header("location: login.php");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$hashed_password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$email = $_POST['email'];

	if ($hashed_password == $cpassword) {
	$sql = "SELECT * FROM registration WHERE username='$username' and email='$email'";
		$result = mysqli_query($con, $sql);
		if (!mysqli_num_rows($result) > 0) {
			$sql1 = "INSERT INTO registration (id,firstname, lastname, username, password, email)
					VALUES (NULL,'$firstname','$lastname','$username', '$hashed_password', '$email')";
			$result = mysqli_query($con, $sql1)or die("Can't Insert".mysql_error());
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				header("location:login.php");
				$firstname= "";
				$lastname= "";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				//$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Sorry! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Sorry! Username and Email Already Exist.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

