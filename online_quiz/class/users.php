<?php  
session_start();

class users
{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="e-learner";
	public $conn;
	public $data;
	public $cat_data;
	public $question_details;

	public function __construct()               //it is the constructor called automatically when we create object
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if ($this->conn->connect_errno) 
		{
			die("Database connection failed".$this->conn->connect_errno);
		}
	}


	public function show_courses()                //function to diaplay the course list in dropdown box
	{
		$query=$this->conn->query("select * from category");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      // while loop to fetch all data one by one and store in cat_data array variable
		{	
			$this->cat_data[]=$row;
			

		}
		
	return $this->cat_data;
	}


	public function show_questions($course_id)
	{
		$query=$this->conn->query("select * from question_test where course_id='$course_id'");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      // while loop to fetch all data one by one and store in cat_data array variable
		{	
			$this->question_details[]=$row;
			

		}
		
	return $this->question_details;
	}

	public function show_result($data)

	{
		
		$ans=implode("", $data);    // to break the $data into string chunk bcoz $data is an array
		$course_id=$_SESSION['course_id'];  // the session variable is created in question_show.php file
		$right=0;
		$wrong=0;
	    $no_answer=0;

		$query=$this->conn->query("select id ,answer from question_test where course_id='$course_id' ");
		

		while($row=$query->fetch_array(MYSQLI_ASSOC))      // while loop to fetch all data one by one and store in cat_data array variable
		{	 
			if($row['answer']==$_POST[$row['id']])
			{
				$right++;
			}
			elseif ($_POST[$row['id']]=="no_attempt")   // if user didn't select any answer
			  {
			 	$no_answer++;
			  }
			else
			{
               $wrong++;                               //if answer is wrong
			}
		}
	
		
		$array=array();                //creating an array
		$array['right']=$right;         // putting the values inside the array
		$array['wrong']=$wrong;
		$array['not_attempted']=$no_answer;
		return $array;					//returning the array filled with above values

			
	 }
	 

	public function add_quiz($query_string)
	{
		$this->conn->query($query_string);
		return true;
	}
}

?>