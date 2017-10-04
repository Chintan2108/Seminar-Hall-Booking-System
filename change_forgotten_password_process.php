<?php 

session_start();
$email = $_SESSION['email'];
echo $email;

	$new_password = $_POST['new_password'];

	$conn = mysqli_connect("localhost","root","","shbs");

	$query1 = "SELECT email FROM user WHERE email='$email'";
	$result = $conn->query($query1);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		
		$query2 = "UPDATE user SET password='$new_password' WHERE email='$email'";
		$conn->query($query2);
		session_destroy();
		header("Location: forgotten_password_changed.php");
  	}
  	else
  	{
  		session_destroy();
  		echo "Some Error Occurred!!! Please Contact Your Administrator.";
  	}


?>