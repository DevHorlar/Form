<?php
$to = 'opeyemibusuyi@gmail.com';
$subject = "contact us";

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';

$message = "'$name' . '$email' . '$address'";
$additional_headers = "additional headers";
$mail = mail($to, $subject, $message, $additional_headers);

$new = "$subject . $message . $additional_headers";

 $fp = fopen("james.txt","a");

    fputs($fp,$new);

    fclose($fp);

?>