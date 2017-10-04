<?php
	session_start();
	if(isset($_SESSION["email"]))
	{
		session_destroy();
		if(isset($_COOKIE["email"]) and isset($_COOKIE["pass"]))
		{
			$email = $_COOKIE["email"];
			$pass = $_COOKIE["pass"];
			setcookie("email", $email, time()-1);
			setcookie("pass", $pass, time()-1);
		}
		echo "<script>alert('Logged out Successfully')</script>";
		header("location: login_user.php");
		//echo "You have successfully logged out. Click here to <a href = 'login.php'> login again";
	}
	else
	{
		header("location: login_user.php");
	}
	

?>