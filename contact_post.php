<?php
// TODO - change email addresses
$to      = 'tkucera10@gmail.com';
$subject = 'PoliticalDoorhangers: Message from ' . $_POST["name"];
$message = $_POST["message"] . "\r\nFrom: " . $_POST["name"] . "\r\nEmail: " . $_POST["email"];
$headers = 'From: tkucera10@gmail.com' . "\r\n" .
    'Reply-To: tkucera10@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);

echo json_encode($to);
echo json_encode($subject);
echo json_encode($message);
echo json_encode($headers);
?>