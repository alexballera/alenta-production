<?php

$name = $_POST["form_name"];
$lastname = $_POST["form_lastname"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$message = $_POST["form_msg"];

	$destino = "alexballera@gmail.com";
	$asunto = "FORMULARIO DE EJEMPLO";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE: " . $name ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . $email ."\n";
  $emailheader = "From: alexballera@gmail.com\r\n";

if($_POST){
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
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
