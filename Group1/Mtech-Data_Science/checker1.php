<?php
session_start();


if (isset($_GET['del'])) {
	$db = mysqli_connect('localhost','root','','mtech_web_services');
	$id = $_GET['del'];
	echo "*link is not open yet";
	$sql="SELECT * FROM permission";
	$result = mysqli_query($db,$sql);
      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if ($id=='select' && $row['selection']=='yes') 
			{ 	header("location: selected.php");
	    			
			} 
			elseif($id=='register' && $row['registration']=='yes')
			{ 
			header("location: application_apply.php");
			}//else{header("location: front_page.php");}


		$db->close(); 
}
//echo"del"

?>
