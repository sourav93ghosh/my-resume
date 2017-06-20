<?php

require '/PHPMailer/class.phpmailer.php';

$to = "sourav93.ghosh@gmail.com";
$from = $_POST["email"];
$subject = $_POST["subject"];
$name = $_POST["name"];
$message = $_POST["message"];
//mail($to,$subject,$message,$headers);
$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "sourav93.ghosh@gmail.com";                 
$mail->Password = "gmailpassword1234";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587; 

$mail->setFrom($from, $name);
$mail->addAddress($to, 'Sourav Ghosh');
$mail->Subject = $subject;
$mail->Body = $message;
$mail->Send();

header('location: home.html');

?>	