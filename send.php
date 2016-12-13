<?php
if($_POST){
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $message = $_POST['form_msg'];
    $lastname: $_POST['form_lastname'];
    $telephone: $_POST['form__phone'];

//send email
    mail("j.andrew.sears@gmail.com", "51 Deep comment from" .$email, $message);
}
?>
