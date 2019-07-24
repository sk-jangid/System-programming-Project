<?php
  //include('log_in.html');
   session_start();
   $db = mysqli_connect('localhost','root','','mtech_web_services');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $mydesignation=mysqli_real_escape_string($db,$_POST['dropdown']);
     // $sql = "SELECT username FROM Users_detail WHERE username = '$myusername' and passowrd = '$mypassword'and designation='$mydesignation'";
      //$result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
     // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($myusername=="skj" && $mypassword=="skj") {
         //session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
        // $error = "Your Login Name or Password is inddfdavalid";
         header("location: add_notice.php");
	

      }else {
//echo "skjjdd";
	//$message = "Username and/or Password incorrect.\\nTry again.";
  	//echo "<script type='text/javascript'>alert('$message');</script>";
		 //echo '<script language="javascript">alert("Please enter valid username and password");</script>';
        // $error = "Your Login Name or Password is invalid";
		//echo "skjjdd";
		header("location: front_page.php");

      }
   }
?>




<html>
   
   <head>
      <title>Home Page</title>
      
      <style type = "text/css">
	#popupbox{
	margin: 0; 
	margin-left: 400px; 
	margin-right: 400px;
	margin-top: 15px; 
	padding-top: 10px; 
	width: 20%; 
	height: 200px; 
	position: absolute; 
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
}


/* Add a black background color to the top navigation */



 /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
width: 600px;
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

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
border-radius:8px;

}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
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
.dropdown-content a:hover {Notice: Undefined variable: file_name in /opt/lampp/htdocs/website/application_apply.php on line 107
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
		    document.getElementById('popupbox').style.visibility="visible";
		}else if(showhide == "hide"){
		    document.getElementById('popupbox').style.visibility="hidden"; 
		}
		}
	</script>
    




   </head>

<body bgcolor = "#d7d7c1">

	<div class="header">
		  <img src="logo.png" style="background-color:d7d7c1;width:500px;height:100%;"alt="logo" />	
		<button style="margin-right:10px;margin-left:95%;margin-top:10px;width:100px;height:50px;" value="Logout">Logout</button>
		<button style="margin-right:10px;margin-left:95%;margin-top:10px;width:100px;height:50px;" value="Change Password">Change password</button>
		

	</div>

 	<div   style="height:100px;">
		  

	</div>


	<div  style="float:left;width:20%;height:1600px;border-size:2px;padding:1%;;">
	<h2> Notices  </h2>
		

		<?php 
			$to="students";$from="faculty1";
			$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
			$query = "SELECT * FROM Notices WHERE key=147369";
					 	

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
		
		
</div>




	<div  style="float:left;width:60%;height:1600px;border-size:2px;padding:1%;;">

		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 1</h1>
			

			</div>
			<?php 
				$count=1;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course2 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];	
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;" target="_blank"><h3>'   .$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

		<div   style="height:100px;">
		  

	</div>

		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 2</h1>
			

			</div>
			<?php 
				$count=2;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course2 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

<div   style="height:100px;">
		  

	</div>



<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 3</h1>
			

			</div>
			<?php 
				$count=3;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course2'.$field2name.'" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

<div   style="height:100px;">
		  

	</div>


<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-colstyle=color:#000;or:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 4</h1>
			

			</div>
			<?php 
				$count=4;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>


<div   style="height:100px;">
		  

	</div>



<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 5</h1>
			

			</div>
			<?php 
				$count=5;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						 <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>


<div   style="height:100px;">
		  

	</div>


<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 6</h1>
			

			</div>
			<?php 
				$count=6;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

<div   style="height:100px;">
		  

	</div>



<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 7</h1>
			

			</div>
			<?php 
				$count=7;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						 <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>
<div   style="height:100px;">style="color:#000;"
		  

	</div>



<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 8</h1>
			

			</div>
			<?php 
				$count=8;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>

<div   style="height:100px;">
		  

	</div>



<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 9</h1>
			

			</div>
			<?php 
				$count=9;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>


<div   style="height:100px;">
		  

	</div>

		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid yellow;background-color:#75a3a3;border-radius:20px;">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#417852;border-radius:20px;">
			</br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 10</h1>
			

			</div>
			<?php 
				$count=10;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM course1 where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					
					echo '
						  <a href="course1'.$field2name.'" style="color:#000;"><h3 >'.$field1name.'</h3> </a>'
						  
						;
				    }
				    $result->free();
				} $mysqli->close();
			?>
		
		</div>









	</div>



<div  style="float:left;width:20%;height:1600px;border-size:2px;padding:1%;;">

		
		
</div>






















 

</body>

</html>	
