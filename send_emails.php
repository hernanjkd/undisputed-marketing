<?php

$page = $_REQUEST['page'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$to = 'carlos.redlich@gmail.com';

$subject = "www.undisputedmarketing.com - $page";
$header = "From: $email";

mail($to, $subject, $message, $header);

setcookie('cookiethatemailwassent','true',time()+1000,'/');

header("Location: http://www.undisputedmarketing.com/$page.php");

?>