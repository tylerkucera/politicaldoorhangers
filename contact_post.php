<?php
// TODO - change email addresses
$to      = 'james@PoliticalDoorhangers.com';
$subject = 'PoliticalDoorhangers: Message from ' . $_POST["name"];
$message = $_POST["message"] . "\r\nFrom: " . $_POST["name"] . "\r\nEmail: " . $_POST["email"];
$headers = 'From: dev@PoliticalDoorhangers.com' . "\r\n" .
    'Reply-To: dev@PoliticalDoorhangers.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>