
<?php
//$db=mysqli_connect("localhost", "root", "", "employee");
	include("connection.php");
	$id=$_GET['delete_id'];
	$delete_query="delete from registration where ID=".$id; 
	$del_id1=mysqli_query($con,$delete_query);
	
	if($del_id1=1)
	{
		header("location:alist.php");
		
	}

?>