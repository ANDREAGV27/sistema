<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->CharSet =  'UTF-8';
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eventlite.software@gmail.com';                     // SMTP username
    $mail->Password   = 'PASSWORD001';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    // Quien envía
    $mail->setFrom('eventlite.software@gmail.com', $nombre);
    // ¿A qué correo se envia?
    $mail->addAddress('eventlite.software@gmail.com');  
//
//    // Attachments       
//    $mail->addAttachment('assent/img/bienvenido.jpg', 'Binevenido');    

    // Content
    $mail->isHTML(true);     
    // TITULO
    $mail->Subject = 'La Florentina';

    $mail->Body    = $body;
    //    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    
    //ARREGLAR
    echo '<script>alert("Gracias por escribirnos, pronto nos comunicaremos con tigo");</script>';
    echo "<script>window.open('index.html','_self')</script>";
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

?>

