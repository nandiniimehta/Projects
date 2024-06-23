
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../tablestyle.css">

<?php
include("connection.php");
include("../includes/header.php");
include("../includes/navbar.php");


//$db=mysqli_connect("localhost", "root", "", "e-learner");
$list_query="select * from registration";
$data_query=mysqli_query($con,$list_query);
?>

<html>
	
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 align="center"> USERS' LIST </h3>
<table align="center" border="1">	
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Password</th>
			<!-- <th>Email</th> -->
			<th colspan="2">Action</th>
		</tr>
		
		<?php  
		
			while($list_data=mysqli_fetch_array($data_query)){
		
		?>
		<tr>
			<td><?php echo $list_data['0'];  ?> </td>
			<td><?php echo $list_data['1'];  ?></td>
			<td><?php echo $list_data['2'];  ?> </td>
			<td><?php echo $list_data['3'];  ?> </td>
			<td><?php echo $list_data['4'];  ?> </td>
			<!-- <td><php echo $list_data['5'];  ?> </td> -->
			<td><a href="edelete.php?delete_id=<?php echo $list_data['id']; ?>">DELETE</a></td>
		
		</tr>
		
		<?php	}  ?>
	
	</table>
</body>
</html>

