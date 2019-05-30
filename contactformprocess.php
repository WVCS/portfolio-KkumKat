<?php
if(isset($_POST['email'])) {
	
	include 'freecontactformsettings.php';
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
    !isset($_POST['gender']) ||
    !isset($_POST['subject']) ||
		!isset($_POST['message']) || 
		!isset($_POST['AntiSpam'])		
		) {
		died('Sorry, there appears to be a problem with your form submission.');		
	}
	
	$full_name = $_POST['name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$comments = $_POST['message']; // required
  $gender = $_POST['gender']; // required
  $subject = $_POST['subject']; // required
	$antispam = $_POST['AntiSpam']; // required
	
	$error_message = "";
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(preg_match($email_exp,$email_from)==0) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($full_name) < 2) {
  	$error_message .= 'Your Name does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
  if(strlen($telephone) < 7) {
  	$error_message .= 'The Phone Number you entered does not appear to be valid.<br />';
  }
  
  if($antispam <> $antispam_answer) {
	$error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
  }
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Form details below.\r\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Name: ".clean_string($full_name)."\r\n";
	$email_message .= "Email: ".clean_string($email_from)."\r\n";
	$email_message .= "Gender: ".clean_string($gender)."\r\n";
  $email_message .= "Telephone: ".clean_string($telephone)."\r\n";
  $email_message .= "Subject: ".clean_string($subject)."\r\n";
	$email_message .= "Message: ".clean_string($comments)."\r\n\r\n".base64_decode($base)."\r\n";
	
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
header("Location: $thankyou");
echo "<script>location.replace('$thankyou')</script>";
}
die();
