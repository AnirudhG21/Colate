<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'task_manager');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get the posted data
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$email = $data['email'];
$password = password_hash($data['password'], PASSWORD_BCRYPT);

// Insert the new user into the database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $sql . '<br>' . $conn->error]);
}

$conn->close();
?>
