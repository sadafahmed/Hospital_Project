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
          <form method="post" action="reception_login.php">
            <h1>Reception Login Form</h1>
			<div>
              <input type="text" name="a_name" class="form-control" placeholder="Name..." required="" />
            </div>
           
            <div>
              <input type="text" name="a_email" class="form-control" placeholder="Email..." required="" />
            </div>
            <div>
              <input type="password" name="a_pass" class="form-control" placeholder="Password..." required="" />
            </div>
            <div>
              <a class="btn btn-default submit">Log in</a>
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-hospital-o" style="font-size: 26px;"></i> Hospital name!</h1>

                <p>©2017 All Rights Reserved.Hospital name. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="email" name="email" class="form-control" placeholder="Email..." required="" />
            </div>
            <div>
              <input type="password" name="pass" class="form-control" placeholder="Password..." required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Already a member ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Hospital name!</h1>

                <p>©2015 All Rights Reserved.Hospital name. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

		<?php
	
	include('db.php');
	

	if(isset($_POST['submit'])){
	
	 $user_name= $_POST['a_name'];
	  $user_email= $_POST['a_email'];
	  $user_pass= $_POST['a_pass'];	
           
	 if($user_name=='' or $user_email=='' or $user_pass==''){
	 
	 echo "<script>alert('Some Fields are empty')</script>";
	 exit();
 }

  	$query ="select * from  registration where reg_name='$user_name', reg_email='$user_email' and reg_pass='$user_pass'";
 if(mysql_query($query)){
          
		  	  
	echo "<script>window.open('admin/admin.php','_self')</script>";	
		}
		else
		{
		echo "<script>alert('try Another id');</script>";
	
		}
	}

?>

</body>

</html>
