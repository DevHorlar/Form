<?php 

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$code = isset($_POST['code']) ? trim($_POST['code']) : '';

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

if (empty($subject)) {
    echo "address is empty";
} else {
    echo "<h3>$subject</h3>";
}
if (empty($phone)) {
    echo "name is empty";
} else {
    echo "<h1>$phone</h1>";
}

if (empty($message)) {
    echo "email is empty";
} else {
    echo "<h2>$message</h2>";
}

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$sql = " INSERT INTO `patients` (`name`, `email`, `subject`, `phone`, `message`, `code`) 
VALUES (:name, :email, :subject, :phone, :message, :code) ";

$stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name, PDO::PARAM_STR );
    $stmt->bindParam(':email', $email,PDO::PARAM_STR );
    $stmt->bindParam(':subject', $subject, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);
    $stmt->bindParam(':code', $code, PDO::PARAM_STR);
    
    $stmt->execute();

      if($stmt){
        echo "patient logged successfully";
    }
?>