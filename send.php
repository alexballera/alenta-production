<?php

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$nombre = strip_tags($_POST['name']);

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

$emailTo = "alexballera@gmail.com";
// $emailTo = "omayraospina@acciconsultores.com";
$subject = "Nuevo mensaje de $nombre";

$body .= "Mensaje Desde El Formulario Web Alenta.\n";
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
$header .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";
$header .= 'From:' . $email. "\r\n";
// $header .= 'Cc:' . 'direccioncomercial@acciconsultores.com' . '\r\n';


// send email
$success = mail($emailTo, $subject, $body, $header);

// redirect to success page
if ($success){
  // echo '<script language="javascript">alert("Tu consulta ha sido enviada correctamente.");</script>';
  echo '<scripts>
          $( function() {
          $( "#dialog-message" ).dialog({
            modal: true,
            buttons: {
              Ok: function() {
                $( this ).dialog( "close" );
              }
            }
          });
        } );
        </script>'
}else{
  echo '<script language="javascript">alert("Revisa los datos ingresados");</script>';
}
?>
