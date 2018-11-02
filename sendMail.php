<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'C:\Users\someO\vendor\autoload.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;   // Enable verbose debug output
    $mail->isSMTP();   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;  // Enable SMTP authentication
    $mail->Username = 'someone.sa96@gmail.com'; // SMTP username
    $mail->Password = 'pdBuy6td';  // SMTP password
    $mail->SMTPSecure = 'tls';  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;    // TCP port to connect to

    $mail->setFrom('saraismailse@gmail.com', 'Sara');
    $mail->addAddress('someone.sa96@outlook.sa');// Add a recipient,Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}