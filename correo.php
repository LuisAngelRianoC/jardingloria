<?php

$destino = "16060058@gmail.com";

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = "Correo enviado desde pagina";
$mensajecompleto = "\n Nombre: ".$nombre. "\n". "Telefono: ".$telefono. "\n"."Correo: ".$correo. "\n". "Mensaje: ". $mensaje;

mail($destino,$asunto,$mensajecompleto,$header);
header('Location: index.html');