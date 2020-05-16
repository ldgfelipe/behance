<?php 


$para      = 'ldgfelipecarrera@gmail.com';
$titulo    = 'Contacto de behance github';
$mensaje   = "Nombre:".$_REQUEST['nombre']." Correo:".$_REQUEST['email']." Mensaje:".$_REQUEST['message'];
$cabeceras = 'From: ldgfelipecarrera@gmail.com' . "\r\n" .
    'Reply-To: ldgfelipecarrera@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
header('Location/index.html');
?>