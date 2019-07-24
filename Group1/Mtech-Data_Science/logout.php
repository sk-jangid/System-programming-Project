<?php
   session_start();
session_destroy(); 
   unset($_SESSION["nam"]);
   unset($_SESSION["id"]);
unset($_SESSION["course"]);
unset($_SESSION['status']);
   $time= strtotime("now");
	echo $time;
   echo '\\nYou have cleaned session';
   header('Refresh: 2; URL = info.php');
?>
