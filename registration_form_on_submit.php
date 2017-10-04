<?php


$confirm_code = md5(uniqid(rand()));


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$mobile_number = $_POST["mobile_number"];



// Create connection
$conn = new mysqli("localhost", "root", "", "shbs");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Check connection


$query1 = "SELECT email FROM user WHERE email = '$email'";
$result = $conn->query($query1);

if($result->num_rows > 0)
{
    echo "This email is already registered! Please <a href = 'login_user.php'>click here</a> to login.";
}
else
{
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
    $mail->Body    = "http://localhost//final//registration_form_on_confirm.php?passkey=$confirm_code";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        

        $sql = "INSERT INTO user_temp(confirmation_code,password,first_name,last_name,email,mobile_number) VALUES ('$confirm_code','$pass','$fname','$lname','$email','$mobile_number')";
        $result = $conn->query($sql);

        header('Location: check_mail.html');
    }

}


?>