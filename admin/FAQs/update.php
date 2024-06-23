<?php
include ('connection.php');
        

	$uid=$_GET['update_id'];
   $uquery="select * from faq where id=".$uid;
	$up_query=mysqli_query($con,$uquery);
	$updata=mysqli_fetch_array($up_query);


// if(isset($_POST['update'])){ 
//    $query= "UPDATE `faq` SET `faq_title`='$faqtitle',`faq_description`='$faqdesc' WHERE id= '$id'"; 
//    $updatedata=mysqli_query($con,$query);

//    $p1=mysqli_query($con,$query);
//    if($p1=1){
//       header("location:manage_faqs.php");
   
//    }
//    if($p1=0){
//       echo"not inserted";
// }	
// }

?>


<html>
<body>
<h1>UPDATE FAQ FORM</h1>
<form method="post" enctype="multipart/form-data">
<table>

<tr>
<td>FAQ Title</td>
<td> <input type='text' name='faq_title' value="<?php echo $updata['1'] ?>"></td>
</tr>
<tr>
<td>FAQ Answer</td>
<td> <input type='text' name='faq_description' value="<?php echo $updata['2']?>"></td>
</tr>
<tr>
<td> <input type='submit' name='updates' value='UPDATE' ></td>
</tr>
</table>
</form>
</body>
</html>

   <?php

if(isset($_REQUEST['updates'])){
	
	$faqtitle=$_POST['faq_title'];
	$faqdesc=$_POST['faq_description'];
	// $username=$_POST['username'];
	// $password=$_POST['password'];
	// $email=$_POST['email'];
	// $contact=$_POST['contact'];
	// $address=$_POST['address'];


   $update_query="update faq set 
			
		faq_title='".$faqtitle."',
		faq_description='".$faqdesc."'
      where id='".$uid."'
		
		";

      $updatedata=mysqli_query($con,$update_query);
	
	if($updatedata=1){
		
		header("location:manage_faqs.php");
		
	}	
}
   ?>