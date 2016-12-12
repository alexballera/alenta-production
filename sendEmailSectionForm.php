<?php
if($_POST["name"] && $_POST["email"] != ""){
	$de = $_POST["name"];
	$destino = "alexballera@gmail.com";
	$asunto = "Tienes un mensaje de " . utf8_decode($_POST["name"]) .;
	$mensaje .= "Mensaje Desde El Formulario Web Alenta."."\n";
	$mensaje .= "\n";
	$mensaje .= "Nombre: " . utf8_decode($_POST["name"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "Correo: " . utf8_decode($_POST["email"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "Teléfono: " . utf8_decode($_POST["telephone"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "Mensaje: " . utf8_decode($_POST["message"]) ."\n";
    $emailheader = "From: Gracias por escribirnos\r\n";
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