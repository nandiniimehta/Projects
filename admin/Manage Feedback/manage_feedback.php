
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../tablestyle.css">

<?php
include("connection.php");
include("../includes/header.php");
include("../includes/navbar.php");

//$db=mysqli_connect("localhost", "root", "", "e-learner");
$list_query="select * from contact_us";
$data_query=mysqli_query($con,$list_query);
?>

<html>
<body>

<br>
<br>
<br>
<br>
<br>
<h1 align="center">Manage Feedback </h1>
<table style="width:10px;" align="center" border="1">	
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Feedback</th>
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
			<td><a href="deletefeedback.php?delete_id=<?php echo $list_data['id']; ?>">DELETE</a></td>
		
		</tr>
		
		<?php	}  ?>
	
	</table>
</body>
</html>