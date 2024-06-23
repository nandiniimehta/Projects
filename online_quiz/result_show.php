<?php 

include("includes/bootstrap_cdn_inc.php");
include("class/users.php");
$res=new users;
//print_r($_POST);
$answers=$res->show_result($_POST);    //here answers becomes an array because show_result() method returns an array
 ?>


 <?php 
 		$total_ques=$answers['right']+$answers['wrong']+$answers['not_attempted'];
 		$attempted_ques=$total_ques-$answers['not_attempted'];
 		$percentage=($answers['right']*100)/$total_ques;
 		$message="";
 		if ($percentage<=100 and $percentage>=70) 
 		{
 			$message="Congratulations you have scored : ";
 		}
 		elseif ($percentage<=69 and $percentage>=50) 
 		{
 			$message="You can do better, try again. you scored : ";
 		}
 		else
 		{
 			$message="Sorry you failed, try again you scored : ";
 		}



  ?>
  <!-- navigation bar starts -->

 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">  <!--  postion relative to align the tab content  -->
                  <div class="logo">
                    <a href="index.php"><img src="../img/LOgo.png" alt="#" /></a>
                  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../index.php">Home <span class="sr-only"></span></a>
      </li>
     
    </ul>
  </div>
</nav>

        <!-- navigation bar ends -->
        <br>
        <br>
  <center> 
<h2>Your Quiz Result</h2><br>
<div class="container mt-5">
	<center><div class="col-md-6">
 <table class="table table-bordered table-active">
 	
  <thead>
    <tr>
      <th scope="col">Total No.of questions</th>
      <th scope="col"><?php echo $total_ques; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Attempted Questions</th>
      <td><?php echo $attempted_ques; ?></td>
     
    </tr>
    <tr>
      <th scope="row">Right Answers</th>
      <td> <?php echo $answers['right'];?></td>
      
    </tr>
    <tr>
      <th scope="row">Wrong Answers</th>
      <td><?php echo $answers['wrong'];?></td>
  
    </tr>

      <tr>
      <th scope="row">Not Attempted</th>
      <td><?php echo $answers['not_attempted'];?></td>
  
    </tr>
  </tbody>

 

</table>
  </center>
 <div class="card-header mt-5 bg-danger text-light">
  	<?php echo $message; ?> <b><?php echo $percentage.' %'; ?></b>
  </div>

  <button type="button" class="btn btn-primary mt-3"><a href="quizhome.php" style="text-decoration: none; color: white;">Back</a></button>
 <!--   <a href="quizhome.php" class="btn btn-success"> Back </a> -->

</div></center>
</div>