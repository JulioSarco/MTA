<?php
$nombre = $_POST['nombre']
$mail = $_POST['mail']
$apellidos = $_POST['apellidos']

$header = 'From:  ' . $mail . " \r\n";
$header .="X-Mailer: PHP" . phpversion() . "\r\n";
$header .="Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Apellidos: " . $apellidos . "\r\n";       
$message .= "Su e-mail es: " . $mail . "\r\n";
$message .= "Enviado el: " . date('d/m/Y' , time());

$para = 'jsarco.smx2n@lamerce.com' ;
$asunto = 'Datos';

mail($para, $asunto, utf8_decode($message), $header);

header("location:menu.html");