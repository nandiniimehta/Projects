<?php 
include "../includes/navbar.php";
session_start();
 ?>
 <link rel="stylesheet" type="text/css" href="../../css/java_programming.css">
 <link rel="stylesheet" type="text/css" href="../../css/programming.css">


<style type="text/css">
	
	#main-content
	{
		margin-right: 0px;
		margin-top: 60px;
		margin-left: 300px;
		padding: 0;
		padding-right: 0px;
		padding-top: 10px;

		background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	body,textarea
	{
		background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	#btn-add
	{
		position: absolute;
		top: 10px;
		left: 800px;
	}

	#sidebarleftmenu
	{
		background: #DC2424;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A569D, #DC2424); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}


</style>


<body>
	


	<div class="sidemenu" id="sidebarleftmenu" style="margin-top: -20px; width: 250px;">
		<ul class="sidemenulist">
			
			<li style="background-color :orangered;"><a href="../admin_main.php" >Welcome Admin</a></li>
			<!-- <li><a href="courses/admin_panel.php">courses</a></li> -->
			<!-- <li><a href="">Add Course</a></li>
			<li><a href="">Update Course</a></li> -->
			


		</ul>
	</div>




<?php
include("connection.php");

$list_query="select * from programming_languages";
$data_query=mysqli_query($con,$list_query);
?>
<html>
	<body>
<div id="main-content" class="container col-md-9 bg-primary mt-20 form-row" style="margin-top: 100px;">
		
       <div class="col-lg-12">
       	<h1 class="text-center text-white">Manage Your Course</h1><br>
       	<table 	class="table table-striped table-hover">
       		
       		<tr class="text-white font-weight-bold">
       			<th>Id</th>
       			<th>Language name</th>
       			<th>Language Image</th>
       			<th>Description</th>
       			<th>Update</th>
       			<th>Delete</th>

       		</tr>
       		<?php


		     while($list_data=mysqli_fetch_array($data_query)){

       		?>

       		<tr>
			
			<td><?php echo $list_data['id'];  ?></td>
			<td><?php echo $list_data['language_name'];  ?></td>
			<td><?php echo $list_data['language_image'];  ?></td>
			<td><?php echo $list_data['language_description'];  ?> </td>
			
			<td><a href="delete_topic.php?delete_id=<?php echo $list_data['id']; ?>">DELETE</a></td>
			<td><a href="update_course.php?update_id=<?php echo $list_data['id']; ?>">UPDATE</a></td>
		  </tr>

       	<?php } ?>

     <!-- echo '<button class="btn btn-primary" id="btn-add"><a href="admin_edit_courses.php?"class="text-white">Add a new topic</a></button>'; -->

       	
       	</table>
       </div>

	</div>
</body>
</html>