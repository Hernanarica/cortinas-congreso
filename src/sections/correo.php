<?php
$destinatario = "cortinascongreso@yahoo.com";
$nombre       = $_POST[ 'nombre' ];
$email        = $_POST[ 'email' ];
$telefono     = $_POST[ 'telefono' ];
$mensaje      = $_POST[ 'mensaje' ];

$header = "Enviado desde la página de cortinascongreso.com";

$mensajecompleto = $mensaje . "\n Atentamente: " . $nombre;

// enviamos con
mail($destinatario, $email, $mensajecompleto, $header);

echo "<script>alert('Correo enviado exitosamente')</script>";
header('location: ../../index.php?s=home');
