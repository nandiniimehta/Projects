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

<?php 



include ('connection.php');


session_start();
//error_reporting(0);

if (isset($_SESSION['username'])) {
    //header("location: ../template");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("location:index.php");
	} else {
		echo "<script>alert('Sorry! Username or Password is Wrong.')</script>";
	}
}

if(isset($_POST['submit'])){
  $username2=$_POST['username'];
  $password2=$_POST['password'];

  $sql2="SELECT * FROM admin WHERE username='$username2' AND password='$password2'";
  $result2=mysqli_query($con,$sql2);
  if($result2->num_rows >0){
    $row2=mysqli_fetch_assoc($result2);
    $_SESSION['username'] = $row2['username'];
    header("location:admin/admin_main.php");
  }else{
    echo "<script>alert('Sorry! Username or Password is wrong.')</script>";
  }
}

?>

<html>
<?php
include ('includes/header.php');
include ('includes/navbar.php');
?>
  <br>
  <br>
  <br>
  <br>
  
<form action="" method="post" enctype="multipart/form-data">
<div class="container">
  <h1>Login Here..</h1>
  <hr>
 
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="submit" name="submit">Login</button>
    
    <hr>

  <div class="container register">
	<p> Don't have an account?<a href="register.php">Register Here </a></p>
	</div>

  
</form>
<!--?php
include('admin/includes/footer.php')
?> -->



</html>