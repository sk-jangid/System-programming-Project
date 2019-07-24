<?php
//include('notice_board.html');
$id = $_POST['uid'];
$pass = $_POST['upass'];

$host = 'localhost';
$user = 'root';
$pass = ' ';
mysql_connect("localhost", "root","");
mysql_select_db("mtech_Web_services");

$dologin = "select id,pass from Users where username = $id and password = $pass ";
$result = mysql_query( $dologin );

if($result)
{
 echo "Successfully Logged In";
}
else
{
 echo "Wrong Id Or Password";
}
?>





