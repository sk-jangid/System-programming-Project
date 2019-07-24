<?php
  include('applicants_page.html');
   //session_start();
 
$db = mysqli_connect('localhost','root','','mtech_web_services');
$count=0;		
	
if (isset($_POST['submit'])){
      // username and password sent from form 
      
      $my_first_name = mysqli_real_escape_string($db,$_POST['first_name']);
      $my_last_name = mysqli_real_escape_string($db,$_POST['last_name']);
      $my_phone = mysqli_real_escape_string($db,$_POST['phone']); 
      $my_gender = mysqli_real_escape_string($db,$_POST['gender']); 
      $my_email = mysqli_real_escape_string($db,$_POST['email']); 
      $my_dob = mysqli_real_escape_string($db,$_POST['dob']);  
      $my_department=mysqli_real_escape_string($db,$_POST['department']);
      $my_gate_score=mysqli_real_escape_string($db,$_POST['gate_score']);
      $my_gate_rank=mysqli_real_escape_string($db,$_POST['gate_rank']);
     // $my_grade_card=mysqli_real_escape_string($db,$_POST['file']);
	//error_reporting(0);
	
function generateRandomString($length=10){
		$db = mysqli_connect('localhost','root','','mtech_web_services');
		$characters = "0123456789";
		$characterLength = strlen($characters);
		$randomString = '';
		// $sql = "SELECT key FROM applicants_detail WHERE key='$randomString'";
		for($i=0;$i<$length;$i++){
			$randomString.=$characters[rand(0,$characterLength-1)];

		}
		$sq = "SELECT * FROM applicants_detail ";
		$result = mysqli_query($db,$sq);
      		
      		while($row = $result->fetch_assoc()){
     		if($randomString == $row["key"]) {
			$db->close();
			return generateRandomString(10);
			
		}}
		return $randomString;
	}
	
	$key=generateRandomString(10);


if(empty($my_first_name) || empty($my_last_name) || empty($my_phone) || empty($my_gender) || empty($my_dob) || empty($my_email) || empty($my_department) ||empty($my_gate_score)||empty($my_gate_rank))
	{
           echo 'alert("Enter all details properly")';
	}

 else{
//$file_type = $_FILES["file"]["type"];
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){  
		$p=$key.'.pdf';   
            $location = 'file/';      
            if(move_uploaded_file($temp_name, $location.$p)){
                //echo 'File uploaded successfully';
		$count=$count+1;
            }
        }       
      else {
        echo 'You should select a file to upload !!';
    }
}
   



	
	
		if (isset($_POST['check']))
		{
		 $db = mysqli_connect('localhost','root','','mtech_web_services');
		$my_first_name=$my_first_name.' '.$my_last_name;
		$sql = "INSERT INTO `applicants_detail` (`name`, `email`, `phone`, `dob`, `gender`, `department`, `gate_score`, `gate_rank`, `key`,`grade_card`) VALUES ('$my_first_name', '$my_email', '$my_phone', '$my_dob','$my_gender', '$my_department', '$my_gate_score', '$my_gate_rank', '$key','0')";
	 		if ($db->query($sql) ==  true) 
			{ 
	    			echo '<script language="javascript">';
				echo 'alert("Your Application Number is \\n            '.$key.'")';
				echo '</script>';
				$count=$count+1;




	
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $sql. "
		   		.$db->error; 
			}
		 }
	 }

	if($count=2){echo 'alert("Successfully registered \\n\\n Your Application Number is \\n            '.$key.'")';}

	// Close connection 
	$db->close(); 
} 
?>

