<?php
  session_start();

  if(!isset($_SESSION["login"]))
    {
    	header("location: login_user.php");
    }
  else
  {
	$email = $_SESSION['email'];
  	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];

	$conn = mysqli_connect("localhost","root","","shbs");

	$query1 = "SELECT email,password FROM user WHERE email='$email' AND password='$current_password'";
	$result = $conn->query($query1);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		
		$query2 = "UPDATE user SET password='$new_password' WHERE email='$email'";
		$conn->query($query2);
		header("Location: password_changed.php");
  	}
  	else
  	{
  		session_destroy();
		if(isset($_COOKIE["email"]) and isset($_COOKIE["pass"]))
		{
			$email = $_COOKIE["email"];
			$pass = $_COOKIE["pass"];
			setcookie("email", $email, time()-1);
			setcookie("pass", $pass, time()-1);
		}
  		header("location: password_not_changed.php");
  	}
  }
?>

