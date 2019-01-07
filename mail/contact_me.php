<?php

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];


$to = 'maxime.bazin76@gmail.com';
$email_subject = "vous avez un message de :  $name";
$email_body = "Message reçu.\n\n"."Details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "De: noreply@yourdomain.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
