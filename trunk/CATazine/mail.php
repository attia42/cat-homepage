<?php

$_REQUEST['page'] == "contact";
include "index.php";

$to      = 'catazine@catreloaded.net';
$subject = $_POST['subject'];
$message = wordwrap($_POST['msg'], 70);
$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo "<div style='padding-bottom: 30px;'>
	<table cellpadding='0' cellspacing='0' style='padding: 5px; border: 1px dashed #bbbbbb; width: 760px; margin-left: auto; margin-right: auto; text-decoration: blink;'>
		<tr><td style='text-align: center;'>
			Message Sent..
		</td></tr>
	</table>
</div>";

?>