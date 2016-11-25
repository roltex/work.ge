<?php
//error_reporting(0);
require_once "PHPMailerAutoload.php";

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "mail.mydocuments.ge";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "mailer@mydocuments.ge";                 
$mail->Password = "ertiorisami123";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "mailer@mydocuments.ge";
$mail->FromName = "Full Name";

$mail->AddReplyTo('annasharvadze@yahoo.com', 'Anna');
$mail->addAddress("temosurguladze@gmail.com", "Recepient sda Name");
//$mail->AddAttachment($_FILES['uploaded_file']['tmp_name'], $_FILES['uploaded_file']['name']);

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML ასდა სდა დსა</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    //echo "Message has been sent successfully";
}