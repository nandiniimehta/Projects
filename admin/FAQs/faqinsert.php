

 <?php
 include("../includes/header.php");
 include("../includes/navbar.php");
 
include("connection.php");
if(isset($_REQUEST['Submit']))
{
 $faqtitle=$_POST['faq_title'];
 $faqans=$_POST['faq_answer']; 

  $iquery="insert into faq(ID,faq_title,faq_answer) 
 values(NULL,'".$faqtitle."','". $faqans."')";


 $p1=mysqli_query($con,$iquery); 
 if($p1=1)
 { 
 	echo "inserted!"; 
   header("location:manage_faqs.php");
 } 
 if($p1=0)
 { 
 echo"not inserted"; 
 } 
 }
?>
<br> 
<br> 
<br> 
<br>

<html>
<body>
<h1 align="center">Insert FAQs</h1>
<br>
<form align="center" method="post" enctype="multipart/form-data">
   <label for="faq_title">FAQ Title</label>
   <input type="text" name="faq_title" placeholder="Enter FAQs" ><br>

   <label for="faq_answer">FAQ Answer</label>
   <input type="text" name="faq_answer" placeholder="Enter FAQ Answer"><br>

   <button type="submit" name="Submit" id="Submit" >Submit<br></button>

</form>
</body>
</html>