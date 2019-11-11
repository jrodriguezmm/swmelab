<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 3;                                       // Enable verbose debug output
    $mail->isSMTP();
	$mail->SMTPDebug = true;	// Set mailer to use SMTP
    $mail->Host       = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
 //   $mail->Username   = 'nbarreto@uniandes.edu.co';                     // SMTP username
 //   $mail->Password   = '';                               // SMTP password//
    $mail->Username   = 'j.rodriguezm@uniandes.edu.co';                     // SMTP username
    $mail->Password   = 'Jesus5044@';                               // SMTP password

	$mail->SMTPSecure = 't';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('j.rodriguezm@uniandes.edu.co', 'Mailer');
//    $mail->addAddress('ca.gonzalezb1@uniandes.edu.co', 'Camilo Andres');     // Add a recipient
	$mail->addAddress('j.rodriguezm@uniandes.edu.co', 'Jesus Rodriguez');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}