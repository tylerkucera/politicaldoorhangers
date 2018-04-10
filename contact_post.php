<?php
$to = 'tyler@tylerkucera.com';
$subject = 'PoliticalDoorhangers: Message from ' . $_POST["name"];
$message = $_POST["message"] . "\r\nFrom: " . $_POST["name"] . "\r\nEmail: " . $_POST["email"];
$headers = 'From: tyler@tylerkucera.com' . "\r\n" .
	'Reply-To: tyler@tylerkucera.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>