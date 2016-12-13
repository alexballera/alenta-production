<?php


if($_POST){
  $nombre = strip_tags($_POST['name']);
  $fecha = time();
  $fechaFormateada = date("j/n/Y", $fecha);
  $de = $_POST["name"];
  $destino = "alexballera@gmail.com";
  $asunto = "Tienes un mensaje de $nombre ";
  $mensaje .= "Mensaje Desde El Formulario Web Alenta."."\n";
  $mensaje .= "\n";
  $mensaje .= "Nombre: " . utf8_decode($_POST["name"]) ."\n";
  $mensaje .= "\n";
  $mensaje .= "Correo: " . utf8_decode($_POST["email"]) ."\n";
  $mensaje .= "\n";
  $mensaje .= "Teléfono: " . utf8_decode($_POST["telephone"]) ."\n";
  $mensaje .= "\n";
  $mensaje .= "Fecha: " . $fechaFormateada ."\n";
  $mensaje .= "\n";
  $mensaje .= "Mensaje: " . utf8_decode($_POST["message"]) ."\n";
  $header = "From: alexballera@gmail.com\r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  $header .= "Mime-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain; charset=iso-8859-1" . " \r\n";
    // $emailheader = "From: alexballera@gmail.com\r\n";
mail($destino, $asunto, $mensaje, $header) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
// echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
// echo '<script language="javascript">alert("Tu consulta ha sido enviada correctamente.");</script>';
  // } else {
//
    // if($_POST["name"] == ""){
    // echo utf8_encode ('Por favor, indica tu nombre.');
    // echo '<script language="javascript">alert("Por favor, indica tu nombre.");</script>';
    // exit; }
    // if($_POST["email"] == ""){
    // echo utf8_encode ('Por favor, indica un email de contacto.');
    // echo '<script language="javascript">alert("Por favor, indica un email de contacto.");</script>';
    // exit; }
}
?>
