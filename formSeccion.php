<?php
// process.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

$name = $_POST["nameSeccion"];
$email = $_POST["emailSeccion"];
$phone = $_POST["phoneSeccion"];
$msg = $_POST["msgSeccion"];
$nombre = strip_tags($name);

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

$emailTo = "alexballera@gmail.com";
$subject = "Nuevo mensaje de $nombre";

$body .= "Mensaje Desde El Formulario Web Alenta.\n";
$body .= "\n";
$body .= "Nombre: " . $name ."\n";
$body .= "\n";
$body .= "Correo: " . $email ."\n";
$body .= "\n";
$body .= "Teléfono: " . $phone ."\n";
$body .= "\n";
$body .= "Mensaje: " . $msg ."\n";
$body .= "\n";
$body .= "Fecha: " . $fechaFormateada ."\n";

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";
$header .= 'From:' . $email. '\r\n'; // Sender's Email

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['nameSeccion']))
        $errors['nameSeccion'] = 'El nombre es requerido!.';

    if (empty($_POST['emailSeccion']))
        $errors['emailSeccion'] = 'El email es requerido!.';


// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
        $data['success'] = true;
        mail($emailTo, $subject, $body, $header);

        // Base de Datos
        // mysqli_connect("localhost", "usuario", "password", "base de datos");
        $enlace = mysqli_connect("localhost", "aballera_alex", "Juan03:16", "aballera_formularios");
        if (mysqli_connect_errno()) {
            echo "Error: No se pudo conectar a MySQL. \r\n" . "\r\n";
            echo "errno de depuración: " . mysqli_connect_errno() . "\r\n";
            echo "error de depuración: " . mysqli_connect_error() . "\r\n";
            exit;
        } else {
            // mysqli_query($enlace, "INSERT INTO tabla (campo1, campo2, ... campon) VALUES ('val1, val2, ... valn)");
          mysqli_query($enlace, "INSERT INTO form_element (name, phone, email, message) VALUES ('$name', '$lastname', '$phone', '$email','$msg')"); //Insert Query
          mysqli_close($enlace);
        }
    }

    // return all our data to an AJAX call
    echo json_encode($data);
