<?php 

	// in this file --> code for add a new course ,update a course and delete a course by admin from manage_courses.php

 session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'e-learner');

					// code to add a new course by admin from manage_courses.php

if (isset($_POST['btn_add'])) {
$languagename=$_POST['course_name'];
$languageimg=$_FILES['course_image'];
$languagedesc=$_POST['course_desc'];

$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );


if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,'../../uploadimg/'.$filename);

	$q="insert into programming_languages(language_name,language_image,language_description) values('$languagename','$destinationfile','$languagedesc')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:manage_courses.php?status=added");
    }
	
 }
}


                   // code to delete course 

if (isset($_POST['btn-delete-course'])) {
	
	$languagename=$_POST['selected_course'];
	$q="DELETE FROM programming_languages WHERE language_name='$languagename'";
	$r=mysqli_query($con,$q);
	if ($r) 
	{
		header("location:manage_courses.php?status=deleted");
	}

}

					// code to update course 


if (isset($_POST['btn_update'])) {
$languagename=$_POST['selected-course-to-update'];
$languageimg=$_FILES['course_image'];
$languagedesc=$_POST['course_desc'];

$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );

if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$q=" UPDATE programming_languages SET language_image='$destinationfile',language_description='$languagedesc' WHERE language_name='$languagename'";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:manage_courses.php?status=updated");
    }
	
 }
}
?>