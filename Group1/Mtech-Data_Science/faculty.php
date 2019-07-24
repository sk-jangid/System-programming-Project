<?php
  //include('log_in.html');
	//if($_SESSION['id']){
   session_start();//}
   $db = mysqli_connect('localhost','root','','mtech_web_services');
  if($_SESSION['status']!="Active")
{
    header("location:info.php");
}


if (isset($_GET['iq'])) {
	$db = mysqli_connect('localhost','root','','mtech_web_services');
	$id = $_GET['iq'];
	$course=$_SESSION['course'];
	$s="DELETE FROM $course WHERE $course.`key` = '$id' ";
	if ($db->query($s) ==  true) 
			{ 
	    		
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $s. "
		   		.$db->error; 
			}


		$db->close(); 

}



function generateRandomString($length=10){
		$db = mysqli_connect('localhost','root','','mtech_web_services');
		$characters = "0123456789";
		$characterLength = strlen($characters);
		$randomString = '';
		
		// $sql = "SELECT key FROM applicants_detail WHERE key='$randomString'";
		for($i=0;$i<$length;$i++){
			$randomString.=$characters[rand(0,$characterLength-1)];

		}
		return $randomString;

	}



  if (isset($_POST['submit_assignment'])) {
    
     $my_notice=mysqli_real_escape_string($db,$_POST['assignment_title']);
	$my_week=mysqli_real_escape_string($db,$_POST['week_number']);
			
		$t='';

		$key=generateRandomString(10);
	

		//$key="741258963 	";
			$name = $_FILES['file1']['name'];  
		    $temp_name  = $_FILES['file1']['tmp_name'];  
		    if(isset($name)){
			if(!empty($name)){  
				$p=$key.'.pdf';   
			    $course = $_SESSION['course'];  
				  if($course=="course1"){ $location = 'course1/'; }elseif ($course=="course2"){$location = 'course2/';}else{$location = 'course3/';}     
			    if(move_uploaded_file($temp_name, $location.$p)){
				echo 'File uploaded successfully';
				$t.="one";
			    }
			}       
		      else {
			echo 'You should select a file to upload !!';
		    }
		}





		if(empty($my_notice)){
		}else{
		$course=$_SESSION['course'];

		if($course=='course1'){
	$sql = "INSERT INTO course1 (`assignment`, `key`,`week`) VALUES ('$my_notice', '$key','$my_week')";}

		elseif($course=='course2'){
	$sql = "INSERT INTO course2 (`assignment`, `key`,`week`) VALUES ('$my_notice', '$key','$my_week')";}
		else{
	$sql = "INSERT INTO course3 (`assignment`, `key`,`week`) VALUES ('$my_notice', '$key','$my_week')";}


	 		if ($db->query($sql) ==  true) 
			{ 
	    			$t=$t.'two';
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $sql. "
		   		.$db->error; 
			}
		 
	 
	     }
	// Close connection 
	if($t=="onetwo"){echo "show_alert('Successfully done');";}else{echo $p;}
	
	$db->close(); 

}
if (isset($_POST['submit_notice1'])) {
$my_notice1=mysqli_real_escape_string($db,$_POST['notice_title']);
$key=generateRandomString(10);

	$time= strtotime("now");
	echo $time;
	


		if(empty($my_notice1)){
		}else{
	$sql = "INSERT INTO `Notices` (`notice`, `key`,`from`,`to`) VALUES ('$my_notice1', '$key','course1','student')";

	 		if ($db->query($sql) ==  true) 
			{ 
	    			
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $sql. "
		   		.$db->error; 
			}
		 
	 
	     }
	// Close connection 

	
	$db->close(); 



}








?>




<html>
   
   <head>
      <title>Faculty Page</title>
      
      <style type = "text/css">

.button_a{
 padding: 6px 16px;
  font-size: 16px;
  color: red;
  text-align: center;
  
  text-decoration: none;
border-radius:8px;
border: solid #254178 2px;
}

	#add_assignment{
	margin: 0; 
	margin-left: 400px; 
	margin-right: 400px;
	margin-top: 15px; 
	padding-top: 10px; 
	 
	 
	position: fixed; 
	left:80px;
	top:200px;
	background: #FBFBF0; 
	border: solid #000000 2px; 
	z-index: 9; 
	
	font-family: arial; 
	visibility: hidden; 
	}
.my_div{
	margin: 0; 
	margin-left: 400px; 
	margin-right: 200px;
	margin-top: 15px; 
	padding-top: 10px; 
	width: 50%; 
	
	position: absolute; 
	
	border: solid #000000 2px; 
	z-index: 9; 
	font-family: arial; 
	
	}
	
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
	    
         }
.header {
  padding: 10px;
  text-align: left;
  background: #d7d7c0;
font-family:Courier;
  color: black;
  font-size: 20px;
height: 10%;
font-weight:bold;
border:#666666 solid 1px;
top:0;
position:fixed;
width:100%
}


#add_notice{
	margin: 0; 
	margin-left: 400px; 
	margin-right: 400px;
	margin-top: 15px; 
	padding-top: 10px; 
	 
	 
	position: fixed; 
	left:80px;
	top:200px;
	background: #FBFBF0; 
	border: solid #000000 2px; 
	z-index: 9; 
	
	font-family: arial; 
	visibility: hidden; 
	}
/* Add a black background color to the top navigation */

.scroll{

top:0;
position:fixed;
width:100%
}

 /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
width: 360px;
border-radius:8px;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
border-radius:8px;
}




/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: #d7d7d0;
opacity:0.5;add_notice.php?del=2147483647

}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
border-radius:8px:
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #dda;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
} 



 footer {
  display: block;
width:100%;	
padding:60px 0px;
background-color:#adad85;
}
</style>
  


<script language="JavaScript" type="text/javascript">
		function login(showhide){
		if(showhide == "show"){
		    document.getElementById('add_assignment').style.visibility="visible";
			document.getElementById('add_notice').style.visibility="hidden";
		    
		}else if(showhide == "hide"){
		    document.getElementById('add_assignment').style.visibility="hidden"; 
		}}function login2(showhide){
		if(showhide == "show"){
		    document.getElementById('add_notice').style.visibility="visible";
			document.getElementById('add_assignment').style.visibility="hidden";
		    
		}else if(showhide == "hide"){
		    document.getElementById('add_notice').style.visibility="hidden"; 
		}
		

		
		}

	</script>    
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>



   </head>

<body bgcolor = "#d7d7c1">

<?php
		



?>









	<div class="header">
			<div  style="float:left;width:40%;height:100%;padding:1%;">
		  <img src="logo.png" style="background-color:d7d7c1;width:500px;height:100%;"alt="logo" />	</div><div  style="float:left;width:30%;height:100%;padding:1%;">
		
		
			Welcome <?php echo $_SESSION["nam"]; ?>.
					</div>
		
	</div>
<div class="scroll" align="right">
	<div class="navbar">
	<a href="javascript:login2('show');");">Add Notice</a>
  	<a href="javascript:login('show');">Add AAssignment</a>
	<a href="http://localhost:8000/website/logout.php");">Logout</a>
	
</div> 
</div>
 	<div   style="height:100px;">
		  

	</div>


	<div  style="float:left;width:20%;height:1000px;border-size:2px;padding:1%;;"><div style="position:fixed;top:15%">
	<h2> Notices  </h2><div  style="border-radius:10px;border:solid red" align="center">


 

      

 </div>
		

		<?php 
			$to=$_SESSION['course'] ;$from="staff";
			$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
			$query = "SELECT * FROM Notices where `to` ='$to' and `from`='staff' ORDER BY date DESC ";
					 	
			if ($result = $mysqli->query($query)) {
			    while ($row = $result->fetch_assoc()) {
				$field1name = $row["notice"];
				
				echo '<ul>
					  <li>'.$field1name.'</li> </ul>'
					  
					;
			    }
			    $result->free();
			} $mysqli->close();
		?>
		
		
</div></div>




	<div  style="float:left;width:60%;height:1000px;border-size:2px;padding:1%;;">

		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 1</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=1;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>








		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 2</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=2;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>





		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 3</h1>
			

			</div>
			<?php 
					

			
				$count=3;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>



		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 4</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=4;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="course1/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>


		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 5</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=5;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>



		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 6</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=6;$course=$_SESSION['course'];
				$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count ";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>



		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 7</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=7;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>



		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 8</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=8;	$course=$_SESSION['course'];			
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>


		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 9</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=9;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>


		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center"></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 10</h1>
			

			</div>
			<?php 
					if (isset($_GET['del'])) {
				
					$faculty = $_GET['del'];
						
						}

			
				$count=10;$course=$_SESSION['course'];				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week=$count";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a> 
						 <a class="button_a" href="faculty.php?iq='.$row['key'].'" >Delete</a> '
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		 

	</div>












<div  style="float:left;width:20%;height:1000px;border-size:2px;padding:1%;;">

		
		
</div>

<div  id="add_assignment" style="border-radius:10px;border:solid black" align="center">


 
       <form action="faculty.php" method="POST" enctype="multipart/form-data">
 
	  <p>
	    <label style="color:red">*</label>
	    <label style="font-size:20px;">Assignment title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="text" style="font-size:20px;width:400px;" name="assignment_title">
		
	  </p>

	<p>
	    <label style="color:red">*</label>
	    <label style="font-size:20px;">Select week:&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="number" style="font-size:20px;width:400px;" name="week_number">
		
	  </p>


	 <p>
		<label style="color:red">*</label>
	    	<label style="font-size:20px;" accept="application/pdf">Upload Assignment</label>(only pdf file allowed)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="file" value="Choose your Assignment" align="right" style="width:200px;height:50px" name="file1">
	     
	 	 </p>
		<br/>



     		<input type="submit" value="Submit" align="right" name="submit_assignment" onclick="show_alert('Are You confirm');" style="width:200px;height:50px" />
     		
 
	</form>
          <a align="right" href="javascript:login('hide')"><label style="color:red">Close </label></a>       

 </div>


<div  id="add_notice" style="border-radius:10px;border:solid red" align="center">


 
       <form action="faculty.php" method="POST" enctype="multipart/form-data">
 
	  <p>
	    <label style="color:red">*</label>
	    <label style="font-size:20px;">Notice:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="text" style="font-size:20px;width:400px;" name="notice_title">
		
	  </p>
		<br/>



     		<input type="submit" value="Submit" align="right" name="submit_notice1" onclick="show_alert('Are You confirm');" style="width:200px;height:50px" /></br>
     
 		<a align="right" href="javascript:login2('hide')"><label style="color:red">Close </label></a>
	</form>
                 

 </div>


 

</body>

</html>	
