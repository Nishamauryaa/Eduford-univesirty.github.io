<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$messege= $_POST['method'];
$email_from='samn44330@gmail.com';
$email_subject= 'New Form Submission';
$email_body = "User Name: $name.\n"
			  "User Email: $visitor_email.\n"
			  "Subject: $Subject.\n"
			  "User messege: $messege.\n";

$to='sman44330@gmail.com';
$headers = "From: $email_form \r\n";

$headers= "Reply-to:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);


header( "Location:contact.html");



?>
