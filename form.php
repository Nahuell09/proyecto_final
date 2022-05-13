<?php
/* Info que viene del formulario */
$nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $mensaje = $_POST['textarea'];
    $radio = $_radio['talk-type']
/* Donde se manda la info */
    $para = 'aronnahuelrojas@gmail.com';
    $asunto = 'Este mail fue enviado desde la web';
/* Funcion que hace que llegue toda la info */
    mail($para, $asunto, utf8_decode($nombre, $mail, $mensaje, $radio));
/* Funcion que redirecciona al usuario una vez finalizado el formulario*/
    header('Location:exito.html');
?>