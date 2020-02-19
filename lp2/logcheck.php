<?php 
 //Name validation

	if( isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];

		if(empty(trim($name))) 
		{
			echo "Null Name submission found!<br>";
		}

		else if(strlen($name)<2)
		{	
			echo 'Name must be more than 2 letters ';

		}
	}	





//email validation
	
	
		$email = $_REQUEST['email'];

		if(empty(trim($email))) 
		{
			echo "Null Email submission found!<br>";
		}

		else
		{
			if(strpos($email, 0)=='@')
				echo 'not valid email address';

		}
		
	

//gender validation
	

		if (empty($_POST["gender"])) {
    echo "Gender is required<br>";
  }

  
  
	

	

  //degree validation


	

		if (empty($_POST["degree"])) {
    echo "Degree is required<br>";
  }

 


	


	// Blood group validation
	

		if (empty($_POST["blood"])) {
    echo "Blood Group is required";
  }

  else
  	echo 'Blood Group Submitted';


	

  
		
		


	
 ?>