<?php 


	$course_name=$_GET['language_name'];


       		 $con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'e-learner');

       		$id=$_GET['id'];
       		$q="DELETE from programming_languages where id='$id'";
			$result=mysqli_query($con,$q);
			if ($result) {
				header("location:../edit_topics.php?language_name=$languagename");
			}








 ?>