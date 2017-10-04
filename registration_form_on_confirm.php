<?php

$passkey = $_GET['passkey'];


$conn = mysqli_connect("localhost","root","","shbs");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM user_temp where confirmation_code = '$passkey'";

$result1 = $conn->query($sql1);

$count = mysqli_num_rows($result1);


if($result1)
{
    
    if ($count > 0)
    {

        while($row = $result1->fetch_assoc()) {

                $fname = $row['first_name'];
                $lname = $row['last_name'];
                $email = $row['email'];
                $mobile_number = $row['mobile_number'];
                $pass = $row['password'];


                
                /*$sql2 = "INSERT INTO user(password,first_name,last_name,mobile_number,email) VALUES ('$pass','$fname','$lname','$mobile_number','$email');";
                $result2 = $conn->query($sql2);*/
        }
    }
    
    $sql2 = "INSERT INTO user(first_name,last_name,email,password,mobile_number) VALUES ('$fname','$lname','$email','$pass','$mobile_number')";
            $result2 = $conn->query($sql2);   

        if($result2)
        {
            

            $sql3 = "DELETE FROM user_temp WHERE confirmation_code = '$passkey'";
            $result3 = $conn->query($sql3);
            header ('Location: registration_success.html');
        }
}








?>