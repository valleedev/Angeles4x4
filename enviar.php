<?php
$name = $_POST['nombre'];
$mail = $_POST['email'];
$message = $_POST['mensaje'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0\r\n";
$header .= "Content-Type: text/plain; charset=UTF-8\r\n";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su e-mail es: " . $mail . "\r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'fundangeles@gmail.com'; 
$asunto = 'Mensaje desde página web de Angeles4x4';

mail($para, $asunto, $message, $header); 

header("location: contacto.php");

?>
