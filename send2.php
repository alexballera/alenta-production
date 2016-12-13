<?php

$name = $_POST["form_name"];
$lastname = $_POST["form_lastname"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$message = $_POST["form_msg"];

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

$emailTo = "alexballera@gmail.com";
$subject = "Nuevo mensaje de " . $name .;

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

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=iso-8859-1" . " \r\n";
$header .= 'From:' . $email. "\r\n"; // Sender's Email
$header .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender

// send email
$success = mail($emailTo, $subject, $body, $header);

// redirect to success page
if ($success){
  echo '<script language="javascript">alert("Tu consulta ha sido enviada correctamente.");</script>';
}else{
  echo '<script language="javascript">alert("Revisa los datos ingresados");</script>';
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
