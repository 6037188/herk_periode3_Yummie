<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
//Load Composer's autoloader
require 'vendor/autoload.php';
 
 
 
 
function sendEmail()
{
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;      
 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yummiesushi14@gmail.com';
    //$mail->Password = 'EFf5yZlOzW';
    $mail->Password = '180400Frank';
 
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
 
    $mail->setFrom('yummiesushi14@gmail.com', 'Sushi Yummie');
    $mail->addAddress("test12082003coding@gmail.com", "Natascha Sloos");
 
    $mail->isHTML(true);
 
    $mail->Subject = 'Reserveringsoverzicht';
    $mail->Body = "<h1>Bedankt voor uw reservering!</h1>";
    $mail->Body .= "<p>Op dit scherm kunt u uw gegevens controleren. Dit vormt geen bevestiging van een tafelreservering. Er wordt per e-mail een bevestiging naar u verzonden.</p>";
   
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Erroe Mailer: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
 
 
sendEmail();
?>