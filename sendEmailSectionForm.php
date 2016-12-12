<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$email_admin = "alexballera@gmail.com"

if($nombre && $email != ""){
  $de = $_POST["name"];
  $destino = $email_admin;
  $asunto = "Tienes un mensaje desde el sitio Web Alenta ";
  $mensaje .= "Mensaje Desde El Formulario Web Alenta."."\n";
  $mensaje .= "\n";
  $mensaje .= "Nombre: " . utf8_decode($_POST["name"]) ."\n";
  $mensaje .= "\n";
  $mensaje .= "Correo: " . utf8_decode($_POST["email"]) ."\n";
  $mensaje .= "\n";
  $mensaje .= "Teléfono: " . utf8_decode($_POST["telephone"]) ."\n";
  $mensaje .= "\n";
  $mensaje .= "Mensaje: " . utf8_decode($_POST["message"]) ."\n";
  // $header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n";
  // $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  // $header .= "Mime-Version: 1.0 \r\n";
  // $header .= "Content-Type: text/plain";
    $emailheader = "From: $email_admin\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
  } else {
    if($_POST["name"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
    if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
}
?>