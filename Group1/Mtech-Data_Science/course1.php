<?php
  //include('log_in.html');
   session_start();
   $db = mysqli_connect('localhost','root','','mtech_web_services');
   
		

	






?>




<html>
   
   <head>
      <title>Student Course Page</title>
      
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
.scroll{top:20%;position:fixed;}


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
  


    




   </head>

<body bgcolor = "#d7d7c1">
		<?php if (isset($_GET['del'])) {
				
					$course = $_GET['del'];
						
						}?>
	<div class="header">
		  <img src="logo.png" style="background-color:d7d7c1;width:500px;height:100%;"alt="logo" />	
			<h1 align="center"> <?php echo $course; ?></h1>
		

	</div>

 	<div   style="height:100px;">
		  

	</div>


	<div  style="float:left;width:20%;height:1600px;border-size:2px;padding:1%;;">
	<h2> Notices  </h2>
	<div style="background-color:red;height:10px;">  </div>	
	<?php
		
			$faculty=$course;


			$to="student";$from=$faculty;
			$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
			$query = "SELECT * FROM Notices WHERE `to` ='$to' and `from`='$from' ORDER BY date DESC";
					 	

			if ($result = $mysqli->query($query)) {
			    while ($row = $result->fetch_assoc()) {
				$field1name = $row["notice"];
				
				echo '<ul>
					  <li><label>'.$field1name.'</li> </label></ul>'
					  
					;
			    }
			    $result->free();
			} $mysqli->close();
		?>
		
		
</div>




	<div  style="float:left;width:60%;height:1600px;border-size:2px;padding:1%;;">

<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
			<div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;"
			</br></br>
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 1</h1>
			

			</div>
			<?php 
					

			
				$count=1;				
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name = $row["key"];
							
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>    '.$field1name.'</h3> </a>'
						  
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
				$count=2;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=3;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=4;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=5;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=6;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM c$course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=7;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						 <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=8;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank"><h3>'.$field1name.'</h3> </a>'
						  
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
				$count=9;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;" target="_blank">><h3>'.$field1name.'</h3> </a>'
						  
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
			  <h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Week 10</h1>
			

			</div>
			<?php 
				$count=10;
				$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
				$query = "SELECT * FROM $course where week='$count'";				
			 
				if ($result = $mysqli->query($query)) {
				    while ($row = $result->fetch_assoc()) {
					$field1name = $row["assignment"];
					$field2name=$row["key"];
					echo '
						  <a href="'.$course.'/'.$field2name.'.pdf" style="color:#000;"><h3 >'.$field1name.'</h3> </a>'
						  
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
