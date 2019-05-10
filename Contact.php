<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['telephone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name $email $phone \n Message: $message";
$recipient = "kassidypeep@gmail.com";
$emailSubject = "$subject";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your email has been sent. I'll try to get back to you as soon as possible. Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return to the home page</a>";
?>
