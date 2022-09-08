<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'our website domain name here';

$email_subject = 'Form Submission';

$email_body = "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "Subject: $subject.\n".
    "User Message: $message.\n";

$to = 'roqbell@gmail.com';      
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_message, $email_body, $headers);

header("Location: contact.html");

?>