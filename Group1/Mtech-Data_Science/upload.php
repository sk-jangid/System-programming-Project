<html>
	<body>
		<h1>Abstract Submission</h1>
		<form action="" method="POST" enctype="multipart/form-data"> 
			<b>Name of participant:<b> <input type="text" name="abs_part"><br><br>
			<b>Title of abstract :<b> <input type="text" name="abs_title"><br><br>
			<b>E-mail ID:<b> <input type="text" name="part_mailid"><br><br>
			<b>Event name:<b> <input type="text" name="event_name"><br><br>
			<b>Type of event:<b>
			<select name="abs_type" >
				<option value="Poster">Poster</option>
				<option value="Oral">Oral</option>
				</select>
				
			<br><br>
			<table frame="box">
			  <tr>
				<th><input type="file" name="file" /></th>
			  </tr>
			</table>
			<br>
			<?php
	include 'connect.php';
	error_reporting(0);
   if(isset($_FILES['file'])){
      //$errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
	  $abs_part=$_POST["abs_part"];
	  $abs_title=$_POST["abs_title"];
	  $part_mailid=$_POST["part_mailid"];
	  $event_name=$_POST["event_name"];
	  $abs_type=$_POST["abs_type"];
	  //echo $value;
      $extensions= array("pdf");
      
	  $start_date = $db->query("SELECT event_start_date FROM event WHERE event_name='".$event_name."'");
	  $end_date = $db->query("SELECT event_end_date FROM event WHERE event_name='".$event_name."'");
		
	  
      if(in_array($file_ext,$extensions)=== false){
         $errors ="extension not allowed, please choose a PDF file.";
      }	

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"file/".$file_name);
		 $insert = $db->query("INSERT into abstract (abs_part,abs_title,part_mailid,event_name,abs_type,abs_file) VALUES ('".$abs_part."','".$abs_title."','".$part_mailid."','".$event_name."','".$abs_type."','".$file_name."')");
         echo "<br>Success";
		 
      }else{
         //print_r($errors);
		 echo "<br>".$errors;
      }
   }
   /*<select name="event_name">
				<?php
					include 'connect.php';
					$type=$_POST["abs_type"];
					$query = "SELECT event_name FROM event WHERE event_type = $type";
					$data = mysqli_query($db, $query);
					while($res = mysqli_fetch_assoc($data)){?>
					
					<option><?phpecho $res['event_name'];?></option><?php } ?>
				</select>*/
?>
			<input type="submit" id="sub" onclick="funtion1()">
			<script type="text/javascript">
			var start_date = "<?php echo $start_date ?>";
			var end_date = "<?php echo $end_date ?>";
			var curr_date = "<?php echo $date ?>";
			function function1(){
			if(curr_date<start_date){alert("Submission not yet started.");}
			if(curr_date>end_date){alert("Submission is over.");}}
			</script>
		</form>
	</body>
</html>