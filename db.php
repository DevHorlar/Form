
<?php
    // Database connection
    $pdo = new PDO('mysql:host=localhost;dbname=notifications_db', 'username', 'password');
    
    $user_id = 1;
    $sql = "UPDATE notifications SET status = 'read' WHERE user_id = :user_id AND status = 'unread'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user_id' => $user_id]);
    
    echo "Notifications marked as read!";
 ?>