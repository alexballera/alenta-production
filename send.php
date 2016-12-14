<?php
if($_POST["form_name"] && $_POST["form_email"] != ""){
	$de = $_POST["form_name"];
	$destino = "alexballera@gmail.com";
	$asunto = "FORMULARIO DE EJEMPLO";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE: " . utf8_decode($_POST["form_name"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["form_email"]) ."\n";
    $emailheader = "From: alexballera@gmail.com\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
	} else {
    if($_POST["form_name"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
    if($_POST["form_email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
}
?>
