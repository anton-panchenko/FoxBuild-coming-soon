<?php

$to = "info@anton-panchenko.com";
$email = 'example@example.com';
$subject = 'Лід з тимчасового сайту';

$message = $_POST['phone'];
$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);

$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);