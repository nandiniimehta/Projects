<?php 
  
include("class/users.php");        //including the users class
$profile=new users;               // craeting the object of user class so that we can call show_user_profile() method 
extract($_POST);
// $profile->show_users_profile($_SESSION['username']);  //calling the show_users profile() method of users class using users class object reference
//print_r($profile->data);

 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


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
  <!-- <a class="navbar-brand text-white" id="myhead" href="">Skill Learn</a> -->
  <!-- <h1 style="color: white;margin-top: 10px;" id="myhead">Skill Learn</h1> -->
  <div class="logo">
                    <a href="index.php"><img src="../img/LOgo.png" alt="#" /></a>
                  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../index.php">Home </a>
      </li>
   </ul>
  </div>
</nav>

        <!-- navigation bar ends -->

  <!-- tab section start -->

  <div class="container mt-4 col-md-10 position-relative">
    <h3 style="font-family: 'Catamaran', sans-serif;">Welcome </n> <?php echo $_SESSION['username']; ?> </n>,Lets start the quiz...</h3>
  

  <!-- tab section ends -->

  <!-- tab content start -->

   <div class="tab-content">
     <div class="tab-pane active " id="menu1" >
    
     <center><button type="button" class="btn btn-success mt-5" href="#myid" data-toggle="collapse">Start Quiz</button></center>

     <!-- dropdown list starts -->

     <center><div class="col-sm-6 mt-3">
       <div class="collapse" id="myid">
      <div class="form-group">
    <label>Select Course</label>
    <form method="POST" action="question_show.php">
    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

      <?php 
       $profile->show_courses();                                 //calling show_courses() method of users class
       foreach ($profile->cat_data as $key => $course) 
       {
         
 ?>

      <option value="<?php echo $course['id'] ;?>"><?php echo $course['cat_name']; ?></option>    <!-- displaying course name in dropdown -->
    

      <?php
}

      ?>
    </select>
      <button type="submit" class="btn btn-success mt-3">Start Quiz</button>
  </form>
  </div>
</div>
</div>
</center>

  <!-- dropdown list ends -->


       </div>
              <!-- tab section ends -->
  </div>            <!-- container closed -->



</body>
</html>