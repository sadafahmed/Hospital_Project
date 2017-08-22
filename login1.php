<?php
session_start();

?>


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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

</script>
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
          <form action="login1.php" method="post">
            <h1>Login here</h1>
			<div>
	<select name="acc_type" class="form-control">
			<option selected="selected" value="" name="acc_type">Account type</option>
			<option value="admin">Admin</option>
			<option value="doctor">Doctor</option>
			<option value="receptionist"> Receptionist</option>
			<option value="accountant">Accountant</option>
			</select>
		
</div><br>
            <div>
				
              <input type="text" name="email" class="form-control"  required placeholder="Email..."pattern="[a-zA-Z]{3,}[@][a-zA-Z]{4,}[.][a-zA-Z]{3,}" />
            </div>
            <div>
              <input type="password" name="pass" class="form-control" required placeholder="Password..." pattern=".{3,}" title="Six or more characters" />
			  
            </div>
         
			<div>
			<input type="submit" name="submit" value="Login" class="btn btn-default">
			</div> 
			<div>
			
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-hospital-o" style="font-size: 26px;"></i> Hospital name!</h1>

                <p><sup>&copy;</sup>2017 All Rights Reserved.Hospital name. Privacy and Terms</p>
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
	
	
	include ('db.php');	
		if(isset($_POST['submit'])){
	 
	  $usercategory = $_POST['acc_type'];
	  $user_email = $_POST['email'];
	  $user_pass =md5( $_POST['pass']);
	   
	 if($usercategory=='') {
		 
	 echo "<script>alert('Select any User type')</script>";
	 }
	
	
	 elseif($user_email=='') {
		 
	 echo "<script>alert('Enter your Email Address')</script>";
	 }
	 elseif ($user_pass=='')
	 {
	echo "<script>alert('Enter your Password')</script>";
	}

 $query ="SELECT * from registration where reg_type='$usercategory' AND reg_email = '$user_email' AND reg_pass = '$user_pass'";
 

	$run = mysqli_query($mysqli, $query);

		if(mysqli_fetch_row($run)){
     	
         $_SESSION['user_email'] = $user_email;  
       
       		 
			if($usercategory == 'admin'){
				header("Location: index.php"); // This line triggers a redirect if the user_type is admin
						} 
			elseif ($usercategory == 'doctor'){
				header("Location: dr_form.php"); // This line triggers for other user_types
			}
			 
	elseif ($usercategory == 'accountant'){
				header("Location: dr_form.php"); // This line triggers for other user_types
			}
	elseif ($usercategory == 'receptionist'){
				header("Location: dr_form.php"); // This line triggers for other user_types
			}
			
				}
				 else {
        echo "<script>alert('Enter correct  Email Address and Password')</script>";
    }
					

		}
	
?>

</body>
</html>