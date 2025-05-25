<?php
$to = 'opeyemibusuyi@gmail.com';
$subject = "contact us! \n";

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$website = isset($_POST['website']) ? trim($_POST['website']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

//// Database connection
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    $sql = " INSERT INTO `register` (`name`, `email`, `address`, `username`, `website`, `password`) 
VALUES (:name, :email, :address, :username, :website, :password) ";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    
    // Bind parameters
    $stmt->bindParam(':name', $name, PDO::PARAM_STR );
    $stmt->bindParam(':email', $email,PDO::PARAM_STR );
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':website', $website, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    
    $stmt->execute();

    if($stmt){
        echo "inserted successfully";
    }
    


// $message = "'$name \n' . '$email \n' . '$username \n' . '$website \n' . '$address \n'";
// $additional_headers = "additional headers \n";

// $mail = mail($to, $subject, $message, $additional_headers);

// $new1 = "$subject . $message . $additional_headers";

//  $fp = fopen("ope.txt","a");

//     fputs($fp,$new1);

//     fclose($fp);

?>