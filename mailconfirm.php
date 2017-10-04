<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$mobile_number = $_POST["mno"];

// Create connection
$conn = new mysqli("localhost", "root", "", "shbs");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Check connection




/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $email = $row["email"];
    }
} else {
    echo "0 results";
}*/


require 'Mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'seminarhallbs@gmail.com';                 // SMTP username
$mail->Password = 'bookmefast';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('seminarhallbs@gmail.com', 'Team, SeminarHallBookingSystem');
//$mail->addAddress('15ce060@charusat.edu.in');     // Add a recipient
//$mail->addAddress('15ce073@charusat.edu.in');
$mail->addAddress($email);
//$mail->addAddress('15ce040@charusat.edu.in');


$mail->Subject = 'Registration confirmation';
$mail->Body    = 'Successfull Registration Jinga lala';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent'; 

	$sql = "INSERT INTO user(password,first_name,last_name,email,mobile_number) VALUES ('$pass','$fname','$lname','$email','$mobile_number')";
	$result = $conn->query($sql);
}


?>