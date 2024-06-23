<!----css file link-->
	<link rel="stylesheet" type="text/css" href="tablestyle.css">


<?php
include("connection.php");
include("header.php");
include("navbar.php");


//$db=mysqli_connect("localhost", "root", "", "e-learner");
$list_query="select * from faq";
$data_query=mysqli_query($con,$list_query);
?>

<html>
	<head>
<body>
	<!-- 		css starts -->
	<style type="text/css">
 	

	 .sidebar-list
	 {
		 margin-right: -15px;
		 
		 font-family: 'Quicksand', sans-serif; 
		 font-size: 14px
	 }
 
	 .sidebar-list li:hover
	 {
	   background-color: deepskyblue !important;
	 }
	  .sidebar-list li a
	  {
		 color:white;
		 text-decoration: none;
	  }
	  .card1
	  {
		  font-family: 'Open Sans', sans-serif;
	  }
	  .cardh2
	  {
		  font-family: 'Lato', sans-serif;
 
	  }
 
</style> 
	</head>

	<div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->




        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="../admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
            <!-- <li class="list-group-item bg-dark"><a href="">Manage Quiz</a></li> -->
            <!-- <li class="list-group-item bg-dark"><a href="">Manage Videos</a></li> -->
            <!-- <li class="list-group-item bg-dark"><a href="">Manage Comments</a></li> -->
            <li class="list-group-item bg-dark"><a href="../Manage Users/alist.php">Manage Users</a></li>
            <li class="list-group-item bg-dark"><a href="">Logout</a></li>
            <li class="list-group-item bg-dark" style="height: 700px;"></li>
          </ul>
        </div>

        <!-- sidebar ends -->

  <!-- ========================================================================================================================== -->



  		<div class="col-md-10 ">


<br>
<br>
<br>
<br>
<br>
<h1 align="center"> FAQ list  </h1> 
<h3 align="center"><a href="faqinsert.php">Insert FAQs </a></h3>
<table style="width:10px;" align="center" border="1">	
		<tr>
			<th>ID</th>
			<th>FAQ Title</th>
			<th>FAQ Description</th>
			<!-- <th>Username</th>
			<th>Password</th>
			<th>Email</th> -->
			<th colspan="2">Action</th>
		</tr>
		
		<?php  
		
			while($list_data=mysqli_fetch_array($data_query)){
		
		?>
		<tr>
			<td><?php echo $list_data['0'];  ?> </td>
			<td><?php echo $list_data['1'];  ?></td>
			<td><?php echo $list_data['2'];  ?> </td>
			<!-- <td><php echo $list_data['3'];  ?> </td> -->
			<!-- <td><php echo $list_data['4'];  ?> </td> -->
			<!-- <td><php echo $list_data['5'];  ?> </td> -->
			<td><a href="delete.php?delete_id=<?php echo $list_data['id']; ?>">DELETE</a></td>
			<td><a href="update.php?update_id=<?php echo $list_data['id']; ?>">UPDATE</a></td>
		
		</tr>
		
		<?php	}  ?>
	
	</table>
</body>
</html>

