<?php

require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer;

/** Configurar SMTP **/
$mail->isSMTP();                                      // Indicamos que use SMTP
$mail->Host = 'smtp.office365.com';  // Indicamos los servidores SMTP
$mail->SMTPAuth = true;                               // Habilitamos la autenticación SMTP
$mail->Username = 'experimentos@uniandes.edu.co';                 // SMTP username
$mail->Password = '1Fse4d0.';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Habilitar encriptación TLS o SSL
$mail->Port = 587;                                    // TCP port

/** Configurar cabeceras del mensaje **/
$mail->From = 'experimentos@uniandes.edu.co';                       // Correo del remitente
$mail->FromName = 'Prueba DSIT';           // Nombre del remitente
$mail->Subject = 'Prueba de Correo';                // Asunto

/** Incluir destinatarios. El nombre es opcional **/
$mail->addAddress('j.rodriguezm@uniandes.edu.co', 'Nombre1');

/** Con RE, CC, BCC **/
$mail->addReplyTo('j.rodriguezm@uniandes.edu.co', 'Informacion');




/** Enviarlo en formato HTML **/
$mail->isHTML(true);                                  

/** Configurar cuerpo del mensaje **/
$mail->Body    = 'Este es el mensaje en HTML <b>en negrita!</b>';
$mail->AltBody = 'Este es el mansaje en texto plano para clientes que no admitan HTML';

/** Para que use el lenguaje español **/
$mail->setLanguage('es');

/** Enviar mensaje... **/
if(!$mail->send()) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}


?>