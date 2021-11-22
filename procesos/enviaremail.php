<?php
use PHPMailer\PHPMailer\PHPMailer;
$amigosEmail = str_replace("(", "<br>( ", $amigosAsignados);

$name = "Regalius";
$email = "luisplayerechvz@gmail.com";
$subject = "Resultado del intercambio";
$body = "<img src='https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=%5B900%2C549%5D&w=1800&h=900&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2011%2F11%2F22%2Fhow-to-wrap-a-present-gift-perfectly-box.jpg' width='100%'>"
. "<h1>Los valores estan organizados por parejas</h1><h2>" 
. $amigosEmail ."</h2><h2>Tu clave aleatoria de verificación es "
. $claveAleatoria ."</h2><h3><a href='http://localhost/Proyecto_c%C3%B3digo_mobile/intro.php'>"."Acceder a la app"."</a></h3>";

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
      