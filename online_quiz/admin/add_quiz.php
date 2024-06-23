<?php 
extract($_POST);
include("../class/users.php");
$quiz=new users;
$ques=htmlentities($question);
$option1=htmlentities($opt1);
$option2=htmlentities($opt2);
$option3=htmlentities($opt3);
$option4=htmlentities($opt4);


$array=[$option1,$option2,$option3,$option4];
$matchedanswer=array_search($answer,$array);
$query="insert into question_test(id,question,opt1,opt2,opt3,opt4,answer,course_id) values(NULL,'$ques','$option1','$option2','$option3','$option4','$answer','$cat')"; //$cat value comes from select name attribute

if ($quiz->add_quize($query)) 
{
	header("location:index.php?run=success");
}

 ?>