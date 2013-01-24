<?php

if(!$_POST) exit;

$to = "preston@rideforthebrand.net";
$from = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$message = "Name  : $name \n 
            Email : $from \n   
            Phone : $phone \n 
            ---
            $message";
$to      = $to;
$subject = 'Contact From Website';
$message = $message;
$headers = 'From: '.$from. "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$ok = mail($to, $subject, $message, $headers);

if($ok){ echo "success"; } else { echo "fail"; }