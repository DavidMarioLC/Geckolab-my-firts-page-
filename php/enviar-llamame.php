<?php
$nombre = $_POST['nombre'];
$mail = 'davidmariolc2016@gmail.com';
$telefono = $_POST['telefono'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su telefono es " . $_POST['telefono'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'davidmariolc2016@gmail.com';
$asunto = 'GeckoLab LLamamé';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>