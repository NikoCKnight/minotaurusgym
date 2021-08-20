<?php

$name = $_POST['1name'];
$mail = $_POST['1email'];
$phone = $_POST['1phone'];
$message = $_POST['1message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "este mensaje fue enviado por: " . $name . "\r\n";
$message .= "su email es: " . $mail . "\r\n";
$message .= "Telefono de contacto: " . $phone . "\r\n";
$message .= "Mensaje: " . $_POST['1message'] . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'nicolasdgioc15@gmail.com';
$asunto = 'asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

 ?>
