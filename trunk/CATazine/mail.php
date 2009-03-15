<?php
include ('includes/validation.php');

if(CheckEmail($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
	$to      = 'catazine@catreloaded.net';
	$subject = $_POST['subject'];
	$message = $_POST['name'] . "Sent this message through CATazine System:\r\n" . wordwrap($_POST['msg'], 70);
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	if (mail($to, $subject, $message, $headers)) {
		$_REQUEST['page'] = "mail_sent";
	}
	else {
		$_REQUEST['page'] = "mail_fail";
	}
}
else {
	$_REQUEST['page'] = "mail_not_valid";
}
require_once("index.php");

?>