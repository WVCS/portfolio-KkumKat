<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phonenumber = $_POST['telephone'];
$gender = $_POST['gender'];
$subject = $_POST['subject'];
$message = $_POST['mesage'];

$email_from = 'KassidyB@portfolio.com';

$email_subject = "Portfolio Contact Form Submission";

$email_body = "Name: $name./n".
"Email: $visitor_email./n".
"Phone number: $phonenumber/n".
"Gender: $gender./n".
"Subject: $subject./n".
"Message: $message./n";

$to = "kassidypeep@gmail.com";

$headers = "From: $email_from /r/n";

mail($to,$email_subject,$email_body,$headers);

header("location: Contact Me.html");

?>
