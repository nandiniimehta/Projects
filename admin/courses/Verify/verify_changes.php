
<?php

      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'e-learner');

  // =============================================================================================================

          // add a new topic in the courses table (request came from add_new_topic.php)
	
	if (isset($_POST['submitbtn'])) {
	

      //  $topicname=$_POST['topic_name'];
	 	$languagename=$_POST['language_name'];
	 	$img=$_POST['language_image'];
	 	$description=($_POST['language_description']);
	 	// echo $topicname;
	 	// echo $coursename;
	 	// echo $description;

	 	$qy="INSERT INTO `programming_languages`( `language_name`, `language_image`, `language_description`) VALUES ('$languagename','$img','$description')";


 	mysqli_query($con,$qy);
 	 echo "inserted";
 	header('location:../edit_topics.php?language_name='.$languagename);
 }


// =============================================================================================================

          // update a topic in the courses table (request came from update_topic.php)


 if (isset($_POST['submitupdate']))
  {
 

          $id=$_POST['id'];
          echo $id;
          $language_name=$_POST['language_name'];
          $img=$_POST['language_image'];
          $description=$_POST['language_description'];

          $q="UPDATE `programming_languages` SET `language_name`='$language_name',`language_image`='$img',`description`='$description' WHERE id='$id'";
           $result=mysqli_query($con,$q);
           if ($result) {
             header("location:../edit_topics.php?language_name=".$language_name);
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