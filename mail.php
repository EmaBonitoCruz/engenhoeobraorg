<?php

if(!empty($_POST['name']) || empty($_POST['email']) || empty($_POST['assunto']) || empty($_POST['mensagem-contact'])){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['assunto'];
$message = $_POST['mensagem-contact'];
$formcontent= $message;
$recipient = "mecruz888@gmail.com";

$headers = 'Content-type: text/plain; charset=UTF-8'. "\r\n".'From: ' .$email . "\r\n" .
'Reply-To: '.$email.'' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$success = mail($recipient, $subject, $formcontent, $headers) or die("Error!");
var_dump($success);
    if($success){
        //sucesso
        header('Location: ../contacto.html');

    }else{
        //nao enviado
        header('Location: ../contacto.html');

    }
}else{
    //campos vazios (todos)
    header('Location: ../contacto.html');
}
?> 