<html>
<head>
<title>Posts</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
</div>


<div class="table">
<center>
<form  method="post" action="register.php">
  <table width="500"  cellpadding="2">
     <tr>
      <th height="52" colspan="2" bgcolor="salmon" scope="col"><font size="5" color="white" >Register</font></th>
     </tr><br>
      
     <tr>
      <td>Name</td>
      <td><input type="name" name="name" /></td>
     </tr>
     <tr>
     <tr>
      <td>Email</td>
      <td><input type="email" name="email" /></td>
     </tr>
     <tr>
      <td>Password</td>
      <td><input type="password" name="password" /></td>
     </tr>
     <tr>
      <td colspan="2" bgcolor="salmon" align="center">
	  <input type="submit" name="submit" value="register" /></td>
     </tr>
  </table>
</form>
</center>


<?php
	
	
include('db.php');	

	if(isset($_POST['submit'])){
	
      
	  $user_name= $_POST['name'];		
	  $user_email= $_POST['email'];
	  $user_password= $_POST['password'];	
 
	 if($user_name=='' or $user_email=='' or $user_password==''){
	 
	 echo "<script>alert('Some Fields are empty')</script>";
	 exit();
 }

 $query ="insert into registration (id,name,email,password) VALUES (NULL, '$user_name','$user_email', '$user_password')";
 
 if(mysql_query($query)){

	echo "<script>window.open('drform.html','_self')</script>";	
		}
		else
		{
		echo "<script>alert('try Another id');</script>";
	
		}
	}

?>





</div>
</div>


</body>

</html>