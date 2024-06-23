<?php 


if (isset($_POST['update'])) {
 
  $uid=$_GET['update_id'];

           $con=mysqli_connect('localhost','root');
           mysqli_select_db($con,'e-learner');


          // $id=$_POST['id'];
          // echo $id;
          $language_name=$_POST['language_name'];
          $description=$_POST['language_description'];

          $q="UPDATE `programming_languages` SET `language_name`='$language_name', `language_description`='$description' WHERE id='$uid'";
           $result=mysqli_query($con,$q);
           if ($result) {
             header("location:admin_edit_courses.php?language_name=".$language_name);
           }
           else
           {
            echo "something went wrong";
           }
}

else
{
  echo "not set";
}


 ?>