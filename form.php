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

if($mail)
{
    echo "Message sent";

    $fp = fopen("ben.txt","a");

    fputs($fp,$new);

    fclose($fp);

}




if (empty($name)) {
    echo "name is empty";
} else {
    echo "<h1>$name</h1>";
}

if (empty($email)) {
    echo "email is empty";
} else {
    echo "<h2>$email</h2>";
}

if (empty($address)) {
    echo "address is empty";
} else {
    echo "<h3>$address</h3>";
}
?>