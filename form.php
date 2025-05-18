<?php

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';

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