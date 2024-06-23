<?php 

include '../classes/manage_quiz_class.php';

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'e-learner');
	if (!$con)
	 {
		die('unable to connect to database');
	 }
//================================================================================================================

if (isset($_POST['btn_add_quiz_sub']))
 {
	extract($_POST);
	$query="insert into category values('','$course_name')";
	$r=mysqli_query($con, $query);
	if ($r==true) 
	{
		header("Location:manage_quiz.php");
	}
 }


//==============================================================================================================


 if (isset($_POST['btn_delete_quiz_sub']))
 {
	extract($_POST);
	$query="delete from category where id='$selected_course'";
	$r=mysqli_query($con, $query);
	if ($r==true) 
	{
		header("Location:manage_quiz.php");
	}

 }


//================================================================================================================

 		// add a new question code from manage_quiz.php  from tab 3 (add questions) 

 

extract($_POST);
if (isset($_POST['submit']))
 {
 $question=$_POST['question'];
 $opt1=$_POST['opt1']; 
 $opt2=$_POST['opt2']; 
 $opt3=$_POST['opt3']; 
 $opt4=$_POST['opt4']; 
 $answer=$_POST['answer']; 
//  $answerid=$_POST['answer_id']; 
// $cat=$_POST['course_id'];
 echo $cat."<br>"; 


  $iquery="insert into question_test(ID,question,opt1,opt2,opt3,opt4,answer,course_id) 
 values(NULL,'".$question."','".$opt1."','".$opt2."','".$opt3."','".$opt4."','".$answer."','".$cat."')";


 $p1=mysqli_query($con,$iquery); 
 if ($p1==true) 
 {
	 header("Location:manage_quiz.php");
 }
	
 }
 
 ?>