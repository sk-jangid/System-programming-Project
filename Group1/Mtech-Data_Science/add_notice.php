<?php
  //include('add_notice.html');
   session_start();

function generateRandomString($length=10){
		//$db = mysqli_connect('localhost','root','','mtech_web_services');
		$characters = "0123456789";
		$characterLength = strlen($characters);
		$randomString = '';
		
		// $sql = "SELECT key FROM applicants_detail WHERE key='$randomString'";
		for($i=0;$i<$length;$i++){
			$randomString.=$characters[rand(0,$characterLength-1)];

		}
		return $randomString;

	}

if(isset($_POST['check_permissions'])){

	if (isset($_POST['check1'])){$select="yes";}else{$select="no";}
		if (isset($_POST['check2'])){$register="yes";}else{$register="no";}
			$db = mysqli_connect('localhost','root','','mtech_web_services');
		$sql="UPDATE permission SET `selection`='$select' ,`registration`='$register' WHERE `permission`.`key`=1";
		if ($db->query($sql) ==  true) 
			{ 
	    			
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $s. "
		   		.$db->error; 
			}


		$db->close(); 


}





  $db = mysqli_connect('localhost','root','','mtech_web_services');
  if (isset($_POST['submit_notice'])) {
    $db = mysqli_connect('localhost','root','','mtech_web_services');
     $my_notice=mysqli_real_escape_string($db,$_POST['notice_title']);
	
	

		$key=generateRandomString(10);
	

		//$key="741258963 	";
			$name = $_FILES['file']['name'];  
		    $temp_name  = $_FILES['file']['tmp_name'];  
		    if(isset($name)){
			if(!empty($name)){  
				$p=$key.'.pdf';   
			    $location = 'advertisement/';      
			    if(move_uploaded_file($temp_name, $location.$p)){
				echo 'File uploaded successfully';
			    }
			}       
		      else {
			echo 'You should select a file to upload !!';
		    }
		}





		if(empty($my_notice)){
		}else{
	$sql = "INSERT INTO `news_section` (`news`, `key`,`department`,`link`) VALUES ('$my_notice', '$key','department','dss')";

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

if (isset($_GET['del'])) {
	$db = mysqli_connect('localhost','root','','mtech_web_services');
	$id = $_GET['del'];
	$s="DELETE FROM `news_section` WHERE `news_section`.`key` = '$id' ";
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


if (isset($_POST['submit_notice2'])) {
    $db = mysqli_connect('localhost','root','','mtech_web_services');
     $my_notice2=mysqli_real_escape_string($db,$_POST['notice_title1']);
	$key=$key=generateRandomString(10);

	if(empty($my_notice2)){
		}else{
	$sql = "INSERT INTO `Notices` (`notice`, `key`,`to`,`from`) VALUES ('$my_notice2', '$key','student','staff')";

	 		if ($db->query($sql) ==  true) 
			{ 
	    		echo'document.getElementById("notice_title1").value = ""';	
			} 
			else
			{ 
	    			echo "ERROR: Could not able to execute $sql. "
		   		.$db->error; 
			}
		 
	 
	     }


$db->close(); }



?>












<html>
   
   <head>
	
      <title>Add Notice</title>
       <style type = "text/css">


#add_notice,#add_notice_to_student{
	margin: 0; 
	margin-left: 10%; 
	margin-right: 10%;
	margin-top: 5%; 
	padding-top: 10px; 
	width: 60%; 
	
	position: absolute; 
	background: #FBFBF0; 
	border: solid #000000 2px; 
	z-index: 9; 
	font-family: arial; 
	visibility: hidden; 
	}
#give_permissions{
	margin: 0; 
	margin-left: 10%; 
	margin-right: 10%;
	margin-top: 5%; 
	padding-top: 10px; 
	width:50%; 
	
	position: absolute; 
	background: #FBFBF0; 
	border: solid #000000 2px; 
	z-index: 9; 
	font-family: arial; 
	visibility: hidden; 
	}



#view_notice{

	margin: 0; 
	margin-left: 10%; 
	margin-right: 10%;
	margin-top: 5%; 
	padding-top: 10px; 
	width: 60%; 
	min-height:400px;
	position: absolute; 
	background: #FBFBF0; 
	border: solid #000000 2px; 
	z-index: 9; 
	font-family: arial; 
	visibility: visible;
}

.button_a{
 padding: 6px 16px;
  font-size: 14px;
  color: red;
  text-align: center;
  height:10px;
  text-decoration: none;
border-radius:8px;
border: solid #254178 2px;
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


  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
border-radius:8px;
}
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
	    
         }
.header{

height:100px;


}
.header img {
  float: left;
  width: 100px;
  height: 100px;
  background: #555;
}

.header h1 {
  position: relative;
  top: 14px;
  left: 10px;
}
.header h2 {
  position: relative;
  top: 14px;
  right: 10px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
width: 668px;
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
  min-width: 160px;}
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

	
        
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
	    
         }
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: #d7d7d0;
	opacity:0.5;

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
.dropdown-content a:hover 
  background-color: #dda;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
} 


	

</style>
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>   
<script language="JavaScript" type="text/javascript">
		function login(showhide){
		if(showhide == "show"){
		    document.getElementById('view_notice').style.visibility="visible";
		    document.getElementById('add_notice').style.visibility="hidden";
			document.getElementById('add_notice_to_student').style.visibility="hidden";
					document.getElementById('give_permissions').style.visibility="hidden";
		}else if(showhide == "hide"){
		    document.getElementById('view_notice').style.visibility="hidden"; 
		}
		}

		function login2(showhide){
		if(showhide == "show"){
		    document.getElementById('add_notice').style.visibility="visible";
		    document.getElementById('view_notice').style.visibility="hidden";
			document.getElementById('add_notice_to_student').style.visibility="hidden";
			document.getElementById('give_permissions').style.visibility="hidden";
		}else if(showhide == "hide"){
		    document.getElementById('add_notice').style.visibility="hidden"; 
		}
}
		function login4(showhide){
		if(showhide == "show"){
                    document.getElementById('give_permissions').style.visibility="visible";
		    document.getElementById('add_notice').style.visibility="hidden";
		    document.getElementById('view_notice').style.visibility="hidden";
			document.getElementById('add_notice_to_student').style.visibility="hidden";
		}else if(showhide == "hide"){
		    document.getElementById('add_notice').style.visibility="hidden"; 
		}}
		function login3(showhide){
		if(showhide == "show"){
		    document.getElementById('add_notice_to_student').style.visibility="visible";
		    document.getElementById('view_notice').style.visibility="hidden";
 			document.getElementById('add_notice').style.visibility="hidden";
			document.getElementById('give_permissions').style.visibility="hidden";
		}else if(showhide == "hide"){
		    document.getElementById('add_notice').style.visibility="hidden"; 
		}
		}

	</script>
 
<script type="text/javascript"> 
function show_alert(str) { 
var msg = str;
alert(msg); 
}
</script>


   </head>

<body bgcolor = "#abc">









	<div class="header" style="background-color:#abc;">
  		<img src="logo.png" style="width:500px;background-color:#abc" alt="logo" />
  		<h1 style="font-style:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admission Section IITG</h1>
		
	</div>

<div style="height:20px;background-color:#e0e0d1">


</div>


<div class="navbar">
  <a href="javascript:login2('show');">Add Advertisement</a>

 
<a href="javascript:login('show');" >History</a>
	<a href="javascript:login3('show');" >Add Notice to students</a><a href="javascript:login4('show');" >Permissions of regestration</a>
</div> 




 


	<div  id="add_notice" style="border-radius:10px;border:solid red" align="center">


 
       <form action="add_notice.php" method="POST" enctype="multipart/form-data">
 
	  <p>
	    <label style="color:red">*</label>
	    <label style="font-size:20px;">Notice title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="text" style="font-size:20px;width:400px;" name="notice_title">
		
	  </p>




	 <p>
		<label style="color:red">*</label>
	    	<label style="font-size:20px;" accept="application/pdf">Upload Advertisement</label>(only pdf file allowed)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="file" value="Choose your Advertisement" align="right" style="width:200px;height:50px" name="file">
	     
	 	 </p>
		<br/>



     		<input type="submit" value="Submit" align="right" name="submit_notice" onclick="show_alert('Are You confirm');" style="width:200px;height:50px" />
     
 
	</form>
                 

 </div>



  	<div id="view_notice" style="border-radius:10px;border:solid red"> 
		<div style="height:30px;"><h1 align="center"> Advertisements</h1></div>
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
					  
					  
					<td >
						 <a class="button_a" href="add_notice.php?del='.$row['key'].'" >Delete</a> 
					</td>
									
					
					<td><a href="advertisement/'.$field1name.'.pdf" target="_blank">'.$field3name.'</a></td> 
					  
				      </tr>';
				/*if(isset($_POST['1'])){
					$db = mysqli_connect('localhost','root','','mtech_web_services');
					$sql = "Delete  FROM news_section WHERE key=1";
	 				if ($db->query($sql) ==  true) 
					{ 
	    					echo "Records inserted successfully."; 
					} 
					else
					{ 
	    					echo "ERROR: Could not able to execute $sql. "
		   				.$db->error; 
					}
		 
	 				$db->close(); 		   
			    		$result->free();
					}*/

		}
		if($count==0){
		echo'
		<div align="center">
		<h3 style="color:red"> * No results to show </h3><div/>';

		}


}
		?>
		
	</div> 

<div  id="add_notice_to_student" style="border-radius:10px;border:solid red" align="center">


 
       <form action="add_notice.php" method="POST" enctype="multipart/form-data">
 
	  <p>
	    <label style="color:red">*</label>
	    <label style="font-size:20px;">Notice:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="text" style="font-size:20px;width:400px;" name="notice_title1">
		
	  </p>
		<br/>



     		<input type="submit" value="Submit" align="right" name="submit_notice2" onclick="show_alert('Are You confirm');" style="width:200px;height:50px" /></br>
     
 		<a align="right" href="javascript:login3('hide')"><label style="color:red">Close </label></a>
	</form>

</div>
<div  id="give_permissions" style="border-radius:10px;border:solid red" align="center">
<form action="add_notice.php" method="POST" enctype="multipart/form-data">
 
	  <p>
	    
	    <label style="font-size:20px;">Students can Apply:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="checkbox" value="terms" name="check1"	>
	  </p>
		<br/>

	 <p>
	   
	    <label style="font-size:20px;">Selections done&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	    <input type="checkbox" value="terms" name="check2"	>
		
	  </p>

     		<input type="submit" value="Submit" align="right" name="check_permissions" onclick="show_alert('Are You confirm');" style="width:200px;height:50px" /></br>
     
 		<a align="right" href="javascript:login3('hide')"><label style="color:red">Close </label></a>
	</form>


                 

 </div>



</body>
 	

</html>		
