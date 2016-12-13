<?php

$nombre = strip_tags($_POST['form_name']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);
$name = $_POST["form_name"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$message = $_POST["form_msg"];


$destino = "alexballera@gmail.com";

$asunto = "Tienes un mensaje de " . $name .;

$mensaje .= "Mensaje Desde El Formulario Web Alenta."."\n";
$mensaje .= "\n";
$mensaje .= "Nombre: " . $name ."\n";
$mensaje .= "\n";
$mensaje .= "Correo: " . $email ."\n";
$mensaje .= "\n";
$mensaje .= "Teléfono: " . $phone ."\n";
$mensaje .= "\n";
$mensaje .= "Mensaje: " . $message ."\n";
$mensaje .= "\n";
$mensaje .= "Fecha: " . $fechaFormateada ."\n";

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=iso-8859-1" . " \r\n";
$headers .= 'From:' . $email. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender

// if($_POST["form_name"] && $_POST["form_email"] != ""){
if($_POST){
mail($destino, $asunto, $mensaje, $header) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
// echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
echo '<script language="javascript">alert("Tu consulta ha sido enviada correctamente.");</script>';
  } else {

    if($_POST["name"] == ""){
    // echo utf8_encode ('Por favor, indica tu nombre.');
    echo '<script language="javascript">alert("Por favor, indica tu nombre.");</script>';
    exit; }
    if($_POST["email"] == ""){
    // echo utf8_encode ('Por favor, indica un email de contacto.');
    echo '<script language="javascript">alert("Por favor, indica un email de contacto.");</script>';
    exit; }
}
?>
