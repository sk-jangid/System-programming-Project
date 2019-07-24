<?php
  include('registration.html');
   //session_start();
   $db = mysqli_connect('localhost','root','','mtech_web_services');

if($_SERVER["REQUEST_METHOD"] == "POST") {		
	
if (isset($_POST['submit'])) {
      // username and password sent from form 
      
      $my_first_name = mysqli_real_escape_string($db,$_POST['first_name']);
      $my_last_name = mysqli_real_escape_string($db,$_POST['last_name']);
      $my_phone = mysqli_real_escape_string($db,$_POST['phone']); 
      $my_gender = mysqli_real_escape_string($db,$_POST['gender']); 
      $my_email = mysqli_real_escape_string($db,$_POST['email']); 
      $my_dob = mysqli_real_escape_string($db,$_POST['dob']);  
      $my_department=mysqli_real_escape_string($db,$_POST['department']);
	$my_address=mysqli_real_escape_string($db,$_POST['address']);
	$my_roll_number=mysqli_real_escape_string($db,$_POST['application_number']);
     // $my_gate_score=mysqli_real_escape_string($db,$_POST['gate_score']);
     // $my_gate_rank=mysqli_real_escape_string($db,$_POST['gate_rank']);
      //$my_grade_card=mysqli_real_escape_string($db,$_POST['file']);
	//$my_checkbox=mysqli_real_escape_string($db,$_POST['check']);
	//$allow=array('pdf');
	//$temp=explode(".",$_FILES['grade_card']['name']);
	//$extension=end($temp);
	//$upload_file=$_FILES['grade_card']['name'];
	//$data = $db->real_escape_string(file_get_contents($_FILES['file']['tmp_name'])); 
	//$filee = mysqli_real_escape_string($db,$_POST['file']);
	//$file_name = $filee['name'];
	//$file_type = $filee['type'];
	//$file_size = $filee['size'];
	//$file_path = $filee['tmp_name'];
	

	function generateRandomString($length=10){

		$characters = "0123456789";
		$characterLength = strlen($characters);
		$randomString = '';
		for($i=0;$i<$length;$i++){
			$randomString.=$characters[rand(0,$characterLength-1)];

		}

		return $randomString;


	}


	
	$key=generateRandomString(10);


		$name = $_FILES['file']['name'];  
		    $temp_name  = $_FILES['file']['tmp_name'];  
		    if(isset($name)){
			if(!empty($name)){  
				$p=$key.'.pdf';   
			    $location = 'grade_card/';      
			    if(move_uploaded_file($temp_name, $location.$p)){
				echo 'File uploaded successfully';
			    }
			}       
		      else {
			echo 'You should select a file to upload !!';
		    }
		}


		$name = $_FILES['sign']['name'];  
		    $temp_name  = $_FILES['sign']['tmp_name'];  
		    if(isset($name)){
			if(!empty($name)){  
				$p=$key.'.JPEG';   
			    $location = 'signatures/';      
			    if(move_uploaded_file($temp_name, $location.$p)){
				echo 'File uploaded successfully';
			    }
			}       
		      else {
			echo 'You should select a file to upload !!';
		    }
		}
			$name = $_FILES['photo']['name'];  
		    $temp_name  = $_FILES['photo']['tmp_name'];  
		    if(isset($name)){
			if(!empty($name)){  
				$p=$key.'.JPEG';   
			    $location = 'Photos/';      
			    if(move_uploaded_file($temp_name, $location.$p)){
				echo 'File uploaded successfully';
			    }
			}       
		      else {
			echo 'You should select a file to upload !!';
		    }
		}




if(empty($my_first_name) || empty($my_roll_number) || empty($my_phone) || empty($my_gender) || empty($my_dob) || empty($my_email) || empty($my_department) ||empty($my_address))
	{
echo '<p>Incorrect username orRTHDFGHDFGH password</p>';
	}

	else
	{
		if (isset($_POST['check']))
		{
		$my_first_name=$my_first_name.' '.$my_last_name;
		$sql = "INSERT INTO `registration` (`name`, `email`, `phone`, `dob`, `gender`, `department`, `address`, `key`) VALUES ('$my_first_name', '$my_email', '$my_phone', '$my_dob','$my_gender', 				'$my_department', '$my_address','$my_roll_number')";
	 		if ($db->query($sql) ==  true) 
			{ 
	    			echo "Records inserted successfully."; 
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $sql. "
		   		.$db->error; 
			}
		 }
	 }

	// Close connection 
	$db->close(); 
}  }
?>

