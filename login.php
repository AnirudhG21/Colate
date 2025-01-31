<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'task_manager');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get the posted data
$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];
$password = $data['password'];

// Retrieve the user from the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid password']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid email']);
}

$conn->close();
?>
