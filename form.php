<?php


$name = $_POST['name']."\n";

$email = $_POST['email']."\n";

$address = $_POST['address']."\n";


// echo "<h1> $name </h1>";

// var_dump($name);



if(empty($name) || isset($name) )
{
    echo "name is empty";
}else{
    echo "<h1>$name</h1>";
}


if(empty($email)  || isset($email))
{
    echo "email is empty";
}else{
    echo "<h2>$email</h2>";
}




if(empty($address)  || isset($address))
{
    echo "address is empty";
}else{
    echo "<h3>$address</h3>";
}
?>