<?php
require("includes/phpMailer/Exception.php");
require("includes/phpMailer/PHPMailer.php");
require("includes/phpMailer/SMTP.php");
//Define NameSpaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> Host = "smtp.gmail.com";
$mail -> SMTPAuth = "true";
$mail -> Port = "25";
$mail -> Username = 'provadb1245@gmail.com';
$mail -> Password = 'Q2@Z!J2rvT';
$mail -> Subject = "Test 1 SMTP Gmail";
$mail -> setFrom("provadb1245@gmail.com");
$mail -> Body = "Plain Text Test Email";
$mail -> addAddress("provadb1245@gmail.com"); 
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false, // peer = certificato
    'verify_peer_name' => false, // inutile
    'allow_self_signed' => true // inutile
    )
    );
    
var_dump($mail);
if (!$mail->send())
 echo "Mailer Error -> " . $mail->ErrorInfo;
else
 echo "Message sent!";
$mail -> smtpClose();


?>