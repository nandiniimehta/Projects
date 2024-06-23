
<?php
//$db=mysqli_connect("localhost", "root", "", "employee");
	include("connection.php");
	$id=$_GET['delete_id'];
	$delete_query="delete from programming_languages where id=".$id; 
	$del_id1=mysqli_query($con,$delete_query);
	
	if($del_id1=1)
	{
		header("location:admin_edit_courses.php");
		
	}

?>