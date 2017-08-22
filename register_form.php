
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>hospital name </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form method="post" action="register_form.php">
            <h1>Registration Form</h1>
		<div>
			<select name="regtype" class="form-control">
<option name="regtype">Account type</option>
<option name="regtype">Admin</option>
<option name="regtype">Doctor</option>
<option name="regtype">Accountant</option>
</select>
</div><br>
          <div>
              <input type="text" name="name"  class="form-control" placeholder="Name"/>
            </div>
            <div>
              <input type="text" name="age" class="form-control" placeholder="Age"/>
            </div>
            <div>
              <input type="date" name="dob" class="form-control" placeholder="DOB"/>
            </div><br>
            <div>   
           <label> Gender </label> 
		  <input type="radio" name="gender" value="male"> Male
		  <input type="radio" name="gender" value="female"> Female
            </div><br>
            <div>
              <input type="text" name="special" class="form-control" placeholder="Specialist"/>
            </div>
			<div>
              <input type="email" name="email" class="form-control" placeholder="Email"/>
            </div>
			<div>
              <input type="password" name="pass" class="form-control" placeholder="Password"/>
            </div>
			<div>
              <select name="country" value="country" class="form-control"><br>
           <option name="country">Country</option>
           <option name="country">Pakistan</option>
           <option name="country">India</option>
           <option name="country">Bangladash</option>
           <option name="country">Iran</option>
            <option name="country">Afganistan</option>
             </select>
            </div><br>
            <div>
              <select name="city" value="city" class="form-control"><br>
           <option name="city">City</option>
           <option name="city">Quetta</option>
           <option name="city">Lahore</option>
           <option name="city">Islamabad</option>
           <option name="city">Karachi</option>
           </select>
            </div><br>
            <div>
              <input type="text" name="cont" class="form-control" placeholder="Contact no"/>
            </div>
            <div>
              <input type="text" name="add" class="form-control" placeholder="Address"/>
            </div>
               <div style=" padding-left:70px;   ">
	  <input type="submit" name="submit" value="register" class="btn-info btn-lg" /><br>
           </div>
		           
         
      <div class="clearfix"></div>
            <div class="separator">

        
              <div class="clearfix"></div>
              <br />
              <div>
                               <footer>
		<style>
		.copyright-info
		{
			margin-top:-10px;
		}	
	</style>
          <div class="copyright-info">
            <h3 align="center" ><font size="5">KC Copyright &copy; 2017
            <i class="fa fa-hospital-o" style="font-size: 26px;"></i> </h3>
          </div>
		  
          <div class="clearfix"></div>
        </footer>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
				<?php
	
	
	include('db.php');	

	if(isset($_POST['submit'])){
	
	  $user_type= $_POST['regtype'];
	  $user_name= $_POST['name'];		
	  $user_age= $_POST['age'];
	  $user_dob= $_POST['dob'];
	  $user_gender= $_POST['gender'];
      $user_spe= $_POST['special'];
	  $user_email= $_POST['email'];
	  $user_pass= $_POST['pass'];
	  $user_country= $_POST['country'];
	  $user_city= $_POST['city'];
	  $user_cont= $_POST['cont'];
	  $user_add= $_POST['add'];
	  	
	if($user_type=='' or $user_name=='' or $user_age=='' or $user_dob=='' or $user_gender==''  or $user_spe=="" or $user_email=="" or $user_pass=="" or $user_country=="" or $user_city=="" or $user_cont=="" or $user_add==""){
	 
	 echo "<script>alert('Some Fields are empty')</script>";
	 exit();
 }	
		
		
		
 $query ="insert into registration(reg_type, reg_name, reg_age, reg_dob, reg_gender, reg_specialist, reg_email, reg_pass, reg_country, reg_city, reg_contact_no, reg_address) 
 VALUES ('$user_type','$user_name','$user_age','$user_dob','$user_gender','$user_spe','$user_email','$user_pass','$user_country','$user_city','$user_cont','$user_add')";
 
	if(mysql_query($query)){
	
	echo "<script>window.open('index2.html','_self')</script>";	
		
		}
		else
		{
		echo "<script>alert('try Another id');</script>";
	
		}
	}

?>			

      </div>
	  </div>
	  </div>
	  
	  