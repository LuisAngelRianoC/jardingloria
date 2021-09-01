<?php

$destino = "16060058@gmail.com";

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = "De: ".$correo;
$mensajecompleto = "\n Nombre: ".$nombre. "\n". "Telefono: ".$telefono. "\n". "Mensaje: ". $mensaje;

  
if ($_POST['submit']) {
if (mail($destino,$asunto,$mensajecompleto,$header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://luisriano1997.github.io/jardingloria/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>