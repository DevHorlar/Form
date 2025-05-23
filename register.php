<?php
$to = 'opeyemibusuyi@gmail.com';
$subject = "contact us";

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$website = isset($_POST['website']) ? trim($_POST['website']) : '';

$message = "'$name' . '$email' . '$username' . '$website' . '$address'";
$additional_headers = "additional headers";

$mail = mail($to, $subject, $message, $additional_headers);

$new1 = "$subject . $message . $additional_headers";

 $fp = fopen("ope.txt","a");

    fputs($fp,$new1);

    fclose($fp);

?>