<?php
  include('log_in.html');
   session_start();
   $db = mysqli_connect('localhost','root','','mtech_web_services');
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
      // username and password sent from form 
      
	


      $myusername = mysqli_real_escape_string($db,$_POST['user_username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['user_password']); 
      $mydesignation=mysqli_real_escape_string($db,$_POST['dropdown']);
      $sql = "SELECT * FROM Users_detail WHERE username = '$myusername' and passowrd = '$mypassword'and designation='$mydesignation'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1 ) {
      	$_SESSION["id"] = $row['username'];
	$_SESSION["nam"] = $row['name'];
	$_SESSION['course'] = $row['course'];
	$_SESSION['status']="Active";	
	
		if(isset($_SESSION["id"])) {
			header("Location:faculty.php");
			

			if($mydesignation=="Student")
			{
				header("location: student.php");
	       		}elseif($mydesignation=="Faculty")
			{
				header("location: faculty.php");
			}
			
		 
			echo "<script type='text/javascript'>eoo('hide');</script>";
		}

      }
      else 
      {
	echo "<script type='text/javascript'>eoo('show');</script>";
      }
       
		

}      
   
?>

	
