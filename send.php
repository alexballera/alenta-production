<?php

$name = $_POST["form_name"];
$lastname = $_POST["form_lastname"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$message = $_POST["form_msg"];
$nombre = strip_tags($_POST['name']);

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

$destino = "alexballera@gmail.com";
$subject = "Nuevo mensaje de $nombre";

$body .= "Mensaje Desde El Formulario Web Alenta."."\n";
$body .= "\n";
$body .= "Nombre: " . $name ."\n";
$body .= "\n";
$body .= "Apellido: " . $lastname ."\n";
$body .= "\n";
$body .= "Correo: " . $email ."\n";
$body .= "\n";
$body .= "Teléfono: " . $phone ."\n";
$body .= "\n";
$body .= "Mensaje: " . $message ."\n";
$body .= "\n";
$body .= "Fecha: " . $fechaFormateada ."\n";

  $emailheader = "From: alexballera@gmail.com\r\n";

if($_POST){
mail($destino, $subject, $body, $emailheader);
echo '<script language="javascript">alert("Tu consulta ha sido enviada correctamente.");</script>';
	} else {
    if($_POST["form_name"] == ""){
      echo '<script language="javascript">alert("Por favor, indica tu nombre.");</script>';
    exit; }
    if($_POST["form_email"] == ""){
      echo '<script language="javascript">alert("Por favor, indica un email de contacto.");</script>';
    exit; }
}
?>
