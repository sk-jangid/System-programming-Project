<html>

<head>
<title>Applicants</title>


</head




<body bgcolor = "#d7d7c1">

<div style="height:100px;background-color:#741253;">
<img src="/home/jangid/Downloads" ALT="logo">

</div>
<div style="height:100px;background-color:#fff;">
<h1 align="center"> Notice Board</h1>

</div>

<div  style="float:left;width:20%;height:500px;">

</div>
<div  style="float:left;width:60%;border-size:2px;padding:1%; border: solid yellow;background-color:fff;border-radius:10px;">


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
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["key"];
        $field2name = $row["department"];
        $field3name = $row["news"];
               $field4name = $row["link"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td><a href="'.$field4name.'" target="_blank">'.$field3name.'</a></td> 
                  
              </tr>';
    }
    $result->free();
} 
?>
</div>
</body>
</html>
