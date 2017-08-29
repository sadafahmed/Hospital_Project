<?php
	
	session_start();
			if(!isset($_SESSION['user'])){
	//
			header("location: login1.php");
}
//	 echo 'Welcome <br>'. ucfirst($_SESSION['user']);
 		//$_SESSION['user'] = $user_name;  
	//	if(!isset($_SESSION['user'])){
	
	//header("location: error.php");
//}	
?>