<?php

$_REQUEST['page'] = "mailed";
require_once("index.php");

$to      = 'catazine@catreloaded.net';
$subject = $_POST['subject'];
$message = wordwrap($_POST['msg'], 70);
$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>