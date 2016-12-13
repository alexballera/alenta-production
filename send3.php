<?php

    $name = $_POST['form_name'];
    $lastname = $_POST['form_lastname'];
    $telephone = $_POST['form_phone'];
    $email = $_POST['form_email'];
    $message = $_POST['form_msg'];
if($_POST){
//send email
    // mail("j.andrew.sears@gmail.com", "51 Deep comment from" .$email, $message);
    mail($name, $lastname, $telephone, $email, $message);
} else {
  echo '<script language="javascript">
          console.log("No se envió el correo.");
        </script>';
}
//
// $name = $_POST["name"];
// $email = $_POST["email"];
// $message = $_POST["message"];
//
// $EmailTo = "emailaddress@test.com";
// $Subject = "New Message Received";
//
// // prepare email body text
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";
//
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";
//
// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";
//
// // send email
// $success = mail($EmailTo, $Subject, $Body, "From:".$email);
//
// // redirect to success page
// if ($success){
//    echo "success";
// }else{
//     echo "invalid";
// }

?>
