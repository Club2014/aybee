<?php

// include dirname(dirname(__FILE__)).'/mail.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'email_validation.php';

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);


$error = '';

// Check name

if(!$name)
{
$error .= 'Veuillez entrer votre nom.<br />';
}

// Check email

if(!$email)
{
$error .= 'Veuillez entrer votre adresse email.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Veuillez entrer une adresse email valide.<br />';
}

// Check message (length)

if(!$message || strlen($message) < 10)
{
$error .= "Veuillez entrer votre message, il doit impérativement contenir au moins 10 caractères.<br />";
}


if(!$error)
{

$to = "contact@ab-agency.fr,antonin.bazin@supinternet.fr,antoine.bienvenu@supinternet.fr";

$mail = mail($to, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>