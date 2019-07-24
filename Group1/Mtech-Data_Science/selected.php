<html>
   
   <head>
      <title>Selected Students</title>
      
      <style type = "text/css">
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






</style>
      




   </head>

<body bgcolor = "#d7d7c1">

	<div class="header">
		  <img src="logo.png" style="background-color:d7d7c1;width:500px;height:100%;"alt="logo" />
		

	</div>
 









<div style="height:70%">


		<div style="height:100px;">
			<h1 align="center"> Selected Students</h1>

		</div>
<div  style="float:left;width:20%;border-size:2px;padding:1%; ">
		</div>
	

	<div  style="float:left;width:60%;border-size:2px;padding:1%; border: solid yellow;background-color:#75a3a3;border-radius:10px;" align="center">
		

		<?php 
			$username = "username"; 
			$password = "password"; 
			$database = "your_database"; 
			$mysqli = new mysqli("localhost","root", '', "mtech_web_services"); 
			$query = "SELECT * FROM applicants_detail ORDER BY gate_score LIMIT 20";
			$count=1;		 	


		 
		 
			echo '<table border="0" cellspacing="10" cellpadding="2"> 
			      <tr> 
				<td> <font face="Arial"> S.No.</font> </td> 
				  <td> <font face="Arial"> Application Number</font> </td> 
				  <td> <font face="Arial"> Name</font> </td> 
				 <td> <font face="Arial"> gate_score   </font> </td> 
				 
				 
				 
			      </tr>';
		 		//$query.= "ORDER BY gate_score";
			if ($result = $mysqli->query($query)) {
			    while ($row = $result->fetch_assoc()) {
				$field1name = $row["key"];
				$field2name = $row["name"];
				$field3name = $row["gate_score"];
				//$field2name = $row["name"];
				
			 
				echo '<tr> 
					<td>'.$count.'</td>
					  <td>'.$field1name.'</td> 
					  <td>'.$field2name.'</td> 
					<td>'.$field3name.'</td> 
					   
					  
				      </tr>
				      <tr> 
					  <td></td> 
					  <td></td> 
					  
				      </tr>';
				$count=$count+1;	
			    }
			    $result->free();
			} 
		?>
	</div>

		
</div>



</body>

</html>	
