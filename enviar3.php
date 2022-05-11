<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$nombre = $_POST['nombre'];
$apellido =$_POST['apellido'];
$correo = $_POST['email'];
$personalidad = $_POST['personalidad'];
$dirigir = $_POST['dirigir'];
$entrenar = $_POST['entrenar'];
$apoyar = $_POST['apoyar'];
$delegar = $_POST['delegar'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.proyectohumano.cl';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'encuesta@proyectohumano.cl';                 // SMTP username
$mail->Password = 'Azul1024.-XD';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to


//Recipients
$mail->setFrom('encuesta@proyectohumano.cl', 'Proyecto Humano');
$mail->addAddress($correo, $nombre);     
$mail->addReplyTo('encuesta@proyectohumano.cl', 'Proyecto Humano');
$mail->addCC('proyectohumanoltda@gmail.com');

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Resultado Cuestionario Habilidades Gerenciales y Liderazgo';
$mail->Body    = 'Hola '. $nombre .'&nbsp;'. $apellido .'<br><br> el resultado del cuestionario es<br>Tu Flexibilidad para Liderar es:&nbsp;<b>'. $personalidad .'</b><br> Tus resultados de liderazgo son:&nbsp;<br>Dirigir: <b>'. $dirigir .'%</b><br>Entrenar: <b>'. $entrenar .'%</b><br>Apoyar: <b>'. $apoyar .'%</b><br>Delegar: <b>'. $delegar .'%</b><br><br>Muchas gracias por participar<br><br><b>Proyecto Humano</b>';


if(!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje se ha enviado correctamente';
    
}