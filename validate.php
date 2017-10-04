<?php

	$conn = mysqli_connect("localhost","root","","shbs");
	$flag = 0;

	if(isset($_POST['login'])){

		$email = $_POST['email'];
		$passw = $_POST['pass'];

		//Fetching From the Database.
		$query = "SELECT * FROM user where email ='$email' and password = '$passw'";
		$result = $conn->query($query);
		
		if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				$uid = $row['email'];
				$pass = $row['password'];
				
				if($uid == $email and $pass == $passw)
				{
						
					//echo "<script>alert('matched')</script>";
					if(isset($_POST['remember']))
					{
						setcookie("email", $email);
						setcookie("pass", $pass);
					}
					
					session_start();
					$flag = 1;
					$_SESSION["email"] = $email;
					$_SESSION["login"] = true;
					//echo "Gayu";
					header("location: list_of_halls.php");
					
				}
				
			}

	}
	else 
	{
		 echo "aailaa";
		 //header("location: login_user.php");
	}

	if($flag == 0)
	{
		echo "Invalid user id or password!";
		echo "Click here to <a href = 'login_user.php'> try again";
	}
?>