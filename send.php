<?php
if($_POST){
    $name = $_POST['form_name'];
    $lastname = $_POST['form_lastname'];
    $telephone = $_POST['form_phone'];
    $email = $_POST['form_email'];
    $message = $_POST['form_msg'];

//send email
    // mail("j.andrew.sears@gmail.com", "51 Deep comment from" .$email, $message);
    mail($name, $lastname, $telephone, $email, $message);
} else {
  echo '<script language="javascript">
          console.log("No se envió el correo.");
        </script>';
}
?>
