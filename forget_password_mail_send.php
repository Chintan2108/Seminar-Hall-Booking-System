<?php



$email = $_POST['email'];

//Create connection
$conn = new mysqli("localhost", "root", "", "shbs");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT email FROM user WHERE email = '$email'";

$result = $conn->query($query);
if ($result->num_rows > 0) 
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


    $mail->Subject = 'Password Recovery';
    $mail->Body    = "http://localhost//final//change_forgotten_password.php?passkey=$email";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) 
    {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else 
    {
        header("Location: check_mail.html");
    }   
} 
else 
{
    echo "This Email Id is not Registered!";
        echo "Click here to <a href = 'registration_form.php'> Register.";
    //header("Location: forgot_password.php");    
}




?>
