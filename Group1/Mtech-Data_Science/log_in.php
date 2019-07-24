<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="css/style.css">
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
height: 100px;
font-weight:bold;
border:#666666 solid 1px;
}



</style>
      




   </head>

<body bgcolor = "#d7d7c1">

	<div class="header">
		<h2 align="left"> Course management System </h2>
		<h1 align="right">Indian Institute of technology</h1>
		

	</div>
 


 


<div id="dialog" class="dialog ">
  
    <div class="dialog-content">
      <form id="login_form" class="dialog-form" action="" method="POST">
      
          <legend style="font-size:35px">Log in</legend>
          <div class="form-group">
            <label for="user_username" class="control-label">Username:</label>
		<br />
		<br />
            <input type="text" id="user_username" class="form-control" name="user_username" autofocus/>
          </div>

<br/><br/>
          <div class="form-group">
            <label for="user_password" class="control-label">Password:</label>
<br />
		<br />
            <input type="password" id="user_password" class="form-control" name="user_password"/>
          </div>
         <br/><br/>
          <div >


<div class="form-group">
            <label  class="control-label">Login As:</label>
		<select name ="dropdown" class ="control-label"> 
			<option value="Student" selected>Student</option>
			<option value="Staff" >Staff</option>
			<option value="Faculty" >Faculty</option>
		</select><br/><br />
          </div>

            <input type="submit" class="btn " value="Log In">
          </div>
          <div class="form-group">
<br><br/>
            <p>*Use your username and password for login</p>

          </div>
      
      </form>
   
  </div>
  
  
</div>
  

   









</body>

</html>		
