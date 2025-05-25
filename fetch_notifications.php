<!-- Fetch Unread Notifications 🧿 with AJAX Polling (PHP and JavaScript) -->
<?php
// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=notifications_db', 'username', 'password');

$user_id = 1; // For demonstration, fetching notifications for user with ID 1
$sql = "SELECT * FROM notifications WHERE user_id = :user_id AND status = 'unread'";
$stmt = $pdo->prepare($sql);
$stmt->execute(['user_id' => $user_id]);
$notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return notifications as JSON
echo json_encode($notifications);
?>