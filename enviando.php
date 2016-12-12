<?php
if($_POST["name"] && $_POST["email"] != ""){
	$de = $_POST["name"];
	$destino = "alexballera@gmail.com";
	$asunto = "FORMULARIO DE EJEMPLO";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "name: " . utf8_decode($_POST["name"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";
    $emailheader = "From: Gracias por escribirnos\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
	} else {
    if($_POST["name"] == ""){
    echo utf8_encode ('Por favor, indica tu name.');
    exit; }
    if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
}
?>