
<?php
	


		  $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'e-learner');

       $topicname=$_POST['language_name'];
	 	$description=$_POST['language_description'];
	 	// echo $topicname;
	 	// echo $coursename;
	 	// echo $description;

	 	$qy="INSERT INTO `programming_languages`( `language_name`, `language_description`) VALUES ('$topicname','$description')";


 	mysqli_query($con,$qy);
 	// echo "inserted";
 	header('location:admin_edit_courses.php?language_name='.$topicname);
?>