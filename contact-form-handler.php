<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'zedbpro@gmail.com';
$email_subject = "new from submission";
$email_body = "user Name:$name.\n".
                "User Email:$visitor_email.\n".
                "User Message: $message.\n";
$to = "kralouat@gmail.com";

$headers="From: $email_from \r\n";
$headers = "Reply-TO:$visitor_email\r\n ";
mail($to,$email_subject,$email_body,$headers);


header("Location: index.html");                






 ?>
