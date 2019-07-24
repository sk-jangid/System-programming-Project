<?php
  //include('log_in.html');
   session_start();
   $db = mysqli_connect('localhost','root','','mtech_web_services');
   if($_SESSION['status']!="Active")
{
    header("location:info.php");
}

	









?>




<html>
   
   <head>
      <title>Student Home Page</title>
      
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
width: 300px;
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
		    document.getElementById('popupbox').style.visibility="visible";
		}else if(showhide == "hide"){
		    document.getElementById('popupbox').style.visibility="hidden"; 
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
<div style="position:fixed;width:100%;">
	<div class="header">
			<div  style="float:left;width:40%;height:100%;padding:1%;">
		  <img src="logo.png" style="background-color:d7d7c1;width:500px;height:100%;"alt="logo" />	</div><div  style="float:left;width:30%;height:100%;padding:1%;">
		
		
			Welcome <?php echo $_SESSION["nam"]; ?>.
					</div>
		
	</div>
	<?php $user=$_SESSION['id']; ?>
	<div class="navbar">
	<a href="http://localhost:8000/website/grade_card_students/<?php echo $_SESSION['id']; ?>.pdf");" target="_blank">Download Grade Card</a>
	<a href="http://localhost:8000/website/logout.php");">Logout</a>
	
	
</div> </div>

 	<div   style="height:100px;">
		  

	</div>


	<div  style="float:left;width:20%;height:1600px;border-size:2px;padding:1%;;">

	<div style="position:fixed;top:15%">	<h2> Notices  </h2>
		<div style="height:20px;background-color:red;"></div>

		<?php 
		
			$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
			$query = "SELECT * FROM Notices where `to` ='student' and `from`='staff' ORDER BY date DESC";
					 	


		 
		 
			
		 
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


	








	</div>





	<div  style="float:left;width:60%;height:1600px;border-size:.5px;padding:1%; ;">



		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
			<a class="button_a" href="course1.php?del=course1" ><div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px">
			</br>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 align="center">Course1</h1>
			

			</div></a>
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.iitg.ac.in/cse/">Instructor 1</a></h3>

		
		</div>

	
	




		<div style="width:100px;height:100px;">
				  

		</div>







		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
		<a class="button_a" href="course1.php?del=course2" ><div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;">
			</br>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 align="center">Course2</h1>
			

			</div></a>
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.iitg.ac.in/cse/">Instructor 2 </a></h3>

		
		</div>


	
	

		<div style="width:100px;height:100px;">


		</div>



		<div   style="margin-right:15%;min-height:400px;margin-left:15%; border: solid black;background-color:#e6f2ff;border-radius:40px 40px 0px 0px">
		<a class="button_a" href="course1.php?del=course3" ><div style="width=100%;height:100px;margin-top=0px;background-color:#004080;color:black;border-radius:40px 40px 0px 0px;">
			</br>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 align="center">Course3</h1>
			

			</div></a>
			<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.iitg.ac.in/cse/">Instructor 3</a></h3>

		
		
		
		</div>

	
	
	</div>


























 

</body>

</html>	
