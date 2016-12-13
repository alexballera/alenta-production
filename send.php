<?php

$name = $_POST["form_name"];
$lastname = $_POST["form_lastname"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$message = $_POST["form_msg"];

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);
$nombre = strip_tags($name);


$destino = "alexballera@gmail.com";

$asunto = "Tienes un mensaje de $nombre";

$mensaje .= "Mensaje Desde El Formulario Web Alenta."."\n";
$mensaje .= "\n";
$mensaje .= "Nombre: " . $name ."\n";
$mensaje .= "\n";
$mensaje .= "Apellido: " . $lastname ."\n";
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

// send email
$success = mail($destino, $asunto, $mensaje, $header);

// redirect to success page
if ($success){
   echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}

// if($_POST){
// mail($destino, $asunto, $mensaje, $header);
// echo '<script language="javascript">alert("Tu consulta ha sido enviada correctamente.");</script>';
//   } else {
//
//     if($_POST["name"] == ""){
//     echo '<script language="javascript">alert("Por favor, indica tu nombre.");</script>';
//     exit; }
//     if($_POST["email"] == ""){
//     echo '<script language="javascript">alert("Por favor, indica un email de contacto.");</script>';
//     exit; }
// }

// if($_POST["form_name"] && $_POST["form_email"] != ""){
// mail($destino, $asunto, $mensaje, $header) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
// echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
  // } else {

    // if($_POST["name"] == ""){
    // echo utf8_encode ('Por favor, indica tu nombre.');
    // exit; }
    // if($_POST["email"] == ""){
    // echo utf8_encode ('Por favor, indica un email de contacto.');
// }
?>
