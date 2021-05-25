<?php

//llamo a los campos
$nombre= $_POST['nombre'];
$mail= $_POST['mail'];
$mensaje= $_POST['mensaje'];

//datos para el envio
$destinatario= "diegolu7@gmail.com";
$asunto= "Mensaje desde portfolio";

$contenido="De: $nombre \n";
$contenido.="De: $mail \n";
$contenido.="De: $mensaje.";

//enviar el mensaje
mail($destinatario, $asunto, $contenido);
header('location:index.html');

?>