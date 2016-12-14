<?php

$name = $_POST["form_name"];
$lastname = $_POST["form_lastname"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$message = $_POST["form_msg"];
$nombre = strip_tags($_POST['form_name']);

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

$emailTo = "alexballera@gmail.com";
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

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=iso-8859-1" . " \r\n";
$header .= 'From:' . $email. "\r\n"; // Sender's Email
$header .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender

if($_POST){
mail($emailTo, $subject, $body, $header);
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
