<?php
   include("config.php");
   session_start();
   
   if(isset($_SESSION['login_user'])){
	   header("location: welcome.php");
   }
   else{
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
           
      $count = mysqli_num_rows($result);      
      
      if($count == 1) {
			$_SESSION['login_user']=$myusername;
			header("location: welcome.php");
		}
		
		else {
		$error = "Your Login Name or Password is invalid";
		header("location: /demo");
      }
	}
   }
?>

