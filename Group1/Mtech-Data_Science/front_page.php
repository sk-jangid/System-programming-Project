<?php
  //include('log_in.html');
   session_start();
   $db = mysqli_connect('localhost','root','','mtech_web_services');
   
      // username and password sent from form 
      if(isset($_POST['submit'])){	
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $mydesignation=mysqli_real_escape_string($db,$_POST['dropdown']);
     
	
      if($myusername=="skj" && $mypassword=="skj") {
         
         header("location: add_notice.php");
	

      }else {

		header("location: front_page.php");

      }

   }

 if(isset($_POST['submit1'])){	
      $myusername1 = mysqli_real_escape_string($db,$_POST['username1']);
      $mypassword1 = mysqli_real_escape_string($db,$_POST['password1']); 
      $mydesignation1=mysqli_real_escape_string($db,$_POST['dropdown1']);
     
	
      if($myusername1=="skj" && $mypassword1=="skj") {
         
         header("location: registration.php");
	

      }else {

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

#popupbox1{
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
.scroll{top:0;
position:fixed;}

/* Add a black background color to the top navigation */



 /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
width: 484px;
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
opacity:0.8;

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
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
} 



#footer {
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
  

<script language="JavaScript" type="text/javascript">
		function login(showhide){
		if(showhide == "show"){
		    document.getElementById('popupbox').style.visibility="visible";
					    document.getElementById('popupbox1').style.visibility="hidden"; 
		}else if(showhide == "hide"){
		    document.getElementById('popupbox').style.visibility="hidden"; 
		}
		}

		function login1(showhide){
		if(showhide == "show"){
		    document.getElementById('popupbox1').style.visibility="visible";
			document.getElementById('popupbox').style.visibility="hidden"; 

		}else if(showhide == "hide"){
		    document.getElementById('popupbox1').style.visibility="hidden"; 
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
	<scroll>
	<div class="header">
		  <img src="logo.png" style="background-color:d7d7c1;width:500px;height:100%;"alt="logo" />
		

	</div>
 





<div class="navbar">
  <a>Home</a>
<div class="dropdown">
   	 <button class="dropbtn">Application
     	 <i class="fa fa-caret-down"></i>
    	 </button>
    <div class="dropdown-content">
      <a href="javascript:login('show');" >Add Notices</a>
     
	<a href="javascript:login1('show');">New Registrartion Students</a>
		<a  href="checker1.php?del=select" target="_blank">Selected Students </a>
		<a  href="checker1.php?del=register" target="_blank">Registration </a>
    </div>
  </div>
  
   <div class="dropdown">
   	 <button class="dropbtn">Deaprtments
     	 <i class="fa fa-caret-down"></i>
    	 </button>
    <div class="dropdown-content">
      <a href="http://www.iitg.ac.in/cse/" target= "_blank"> CSE</a>
      <a href="http://www.iitg.ac.in/eee/" target="_blank">EEE</a>
      <a href="http://www.iitg.ac.in/maths"target="_blank">Math</a>
	<a href="http://www.iitg.ac.in/ece"target="_blank">ECE</a>
    </div>
  </div>
<a href="http://localhost:8000/website/info.php" target= "_blank">Course Mangement</a>
</div> 
</div>



<div style="height:70%;background-image: url('front.jpg'); background-color: #cccccc;">


		<div style="height:40px;">
			<h1 align="center" style="color:brown"> Notice Board</h1>

		</div>
	

	<div   style="margin-right:20%;min-height:400px;margin-left:20%;border-size:2px;padding:1%; border: solid yellow;background-color:#75a3a3;border-radius:10px;">
		

		<?php 
			$username = "username"; 
			$password = "password"; 
			$database = "your_database"; 
			$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
			$query = "SELECT * FROM news_section";
					 	


		 
		 
			echo '<table border="0" cellspacing="10" cellpadding="2"> 
			      <tr> 
				  <td> <font face="Arial"></font> </td> 
				  <td> <font face="Arial"></font> </td> 
				  <td> <font face="Arial"></font> </td> 
				 
			      </tr>';
		 		$count=0;
			if ($result = $mysqli->query($query)) {
			    while ($row = $result->fetch_assoc()) {
				$count=1;
				$field1name = $row["key"];
				$field2name = $row["department"];
				$field3name = $row["news"];
				       $field4name = $row["link"];
			 
				echo '<tr> 
					  <td>'.$field1name.'</td> 
					  <td>'.$field2name.'</td> 
					  <td><a href="advertisement/'.$field1name.'.pdf" target="_blank">'.$field3name.'</a></td> 
					  
				      </tr>';
			    }
			    $result->free();
						if($count==0){echo '<p align="center" style="color:red"> *No Advertisements Currently </p> ' ;}
			} $mysqli->close();40
		?>
	</div>

	
	
</div>



<div id="popupbox" style="border-radius:10px;border:solid red"> 
<form name="login" action="" method="post">
<center>Username:</center>
<center><input name="username" size="14" /></center>
</br>
<center>Password:</center>
<center><input name="password" type="password" size="14" /></center>
</br>
<center><input type="submit" name="submit" value="login" /></center>
</form>
<br />
<center><a href="javascript:login('hide');">close</a></center> 
</div> 

<div id="popupbox1" style="border-radius:10px;border:solid red"> 
<form name="login1" action="" method="post">
<center>Username:</center>
<center><input name="username1" size="14" /></center>
</br>
<center>Password:</center>
<center><input name="password1" type="password" size="14" /></center>
</br>
<center><input type="submit" name="submit1" value="login" /></center>
</form>
<br />
<center><a href="javascript:login1('hide');">close</a></center> 
</div> 




</body>

</html>	
