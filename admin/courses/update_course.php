 <?php 
include "../includes/header.php";
include "connection.php";
  ?>
<style type="text/css">
	
</style> 


<?php 
       		   $uid=$_GET['update_id'];
			   $uquery="select * from programming_languages where id=".$uid;
			   $up_query=mysqli_query($con,$uquery);
			   $updata=mysqli_fetch_array($up_query);
       		?>

<html>
<body>	
    <form  method="POST" action="">

	Enter course name:<input type="text" name="coursename" class="form-control" value="<?php echo $updata['language_name'] ?>">

	Enter the content:
    <textarea id="text" name="text" class="text" placeholder="Enter the content..."><?php echo $updata['language_description']; ?></textarea>
     
    <button type="submit" name="submitupdate" class="btn btn-success">submit</button>
</form>
</body>
</html>


<?php
if(isset($_REQUEST['submitupdate'])){
	
	$coursename=$_POST['language_name'];
	$coursedesc=$_POST['language_description'];

	$update_query="update programming_languages set 
			
	language_name='".$coursename."',
	language_description='".$coursedesc."'
    where id='".$uid."'
	
	";

  $updatedata=mysqli_query($con,$update_query);

  if($updatedata=1){
	
	header("location:admin_edit_courses.php");
	
  }	
}
?>