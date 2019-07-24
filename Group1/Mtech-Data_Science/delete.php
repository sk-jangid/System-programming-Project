<?php
session_start();
//include 'add_notice.php'
//Define the query
$data = mysqli_connect('localhost','root','','mtech_web_services');
 $my_name=mysqli_real_escape_string($db,$_POST['name']);
$query = "DELETE FROM news_section WHERE key='$my_name' LIMIT 1";

//sends the query to delete the entry
mysql_query ($query);

if ( ($data->query($sql) ==  true) ) { 
//if it updated

           // <strong>Contact Has Been Deleted</strong><br/><br />


 } else { 
//if it failed

 
           // <strong>Deletion Failed</strong><br /><br />



} 
?>
