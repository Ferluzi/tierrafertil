<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
//envió de mensaje

$to = 'nikolasmp92@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "contacto desde tu Sitio WEB :  $name";
$email_body = "Tu has recibido un mensaje de contacto de www.restauranttierrafertil.cl SUERTE .\n\n"." detalles del contacto:\n\nnombre: $name\n\ncorreo: $email_address\n\ntelefono: $phone\n\nmensaje:\n$message";
$headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

