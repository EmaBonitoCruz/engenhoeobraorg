<?php
// $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['assunto'];
$message = $_POST['mensagem-contact'];
$formcontent="De: $name \n Mensagem: $message";
$recipient = "mecruz888@gmail.com";
$mailheader = "De: $email \r\n";
$success = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

// if ($_POST['submit']) {
    if($success){
        // print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php\">";
        echo "it worked";
    }else{
        // print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php\">";
        echo "error";
    }  
// }
if ($_POST['submit']) {
    if($success){
        // print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php\">";
        echo "it worked"
    }else{
        // print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php\">";
        echo "error"
    }   
}
?> 