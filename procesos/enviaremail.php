<?php
use PHPMailer\PHPMailer\PHPMailer;
$amigosEmail = str_replace("(", "<br>( ", $amigosAsignados);

$name = "Regalius";
$email = "luisplayerechvz@gmail.com";
$subject = "Resultado del intercambio";
$body = "<h1>Los valores estan organizados por parejas</h1><h2>" . $amigosEmail ."</h2>";

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

//smtp settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "luisechvz@gmail.com";
$mail->Password = 'ENRIQUELUIS123';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//email settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress("luisechvz@gmail.com");
$mail->Subject = ("$email ($subject)");
$mail->Body = $body;

if($mail->send()){
    //$status = "success";
    //$response = "Email is sent!";
}
else
{
    //$status = "failed";
    //$response = "Something is wrong: <br>" . $mail->ErrorInfo;
}

//exit(json_encode(array("status" => $status, "response" => $response)));

?>
      