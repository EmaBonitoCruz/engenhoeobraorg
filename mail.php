<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['assunto']
$message = $_POST['mensagem-contact'];
$formcontent="De: $name \n Mensagem: $message";
$recipient = "mecruz888@gmail.com";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>