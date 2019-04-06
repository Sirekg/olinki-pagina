<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$destinatario = 'gestion@olinki.com.mx';
$asunto = $_POST['message'];
$mensaje = 'Pieza' . $IdEntrada . "\n" . 'Nombre: ' . $nombre . "\n" . $telefono = 'Telefono: ' . $telefono = $_POST['phone'] . "\n" . 'Mensaje: ' . $_POST['message'];
$cabecera = "From:" . $email. "\r\n" . "Reply-To: " . $email;

if(mail($destinatario, $asunto, $mensaje, $cabecera)){
   $enviado= "Tu mensaje ha sido enviado exitosamente";
print "<script>alert('$enviado')</script>";
print("<script>window.location.replace('index.html');</script>"); 
}else{
    echo "El mensaje no se pudo enviar;";
}

?>