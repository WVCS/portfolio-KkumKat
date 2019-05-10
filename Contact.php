<?php
if($_POST["message"]) {
    mail("kassidypeep@gmail.com", "Form to email message", $_POST["name"], $_POST["email"], $_POST["telephone"], $_POST["subject"], $_POST["message"], "From: an@email.address");
}
?>

<?php

if($_POST["submit"]) {
    $recipient="kassidypeep@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $senderEmail=$_POST["email"];
    $senderTelephone=$_POST["telephone"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $senderTelephone, $subject, $message, "From: $name <$senderEmail>");

    $thankYou="<p>Your message has been sent. I'll get back to you as soon as I can. Thank you!</p>";
}

?>
