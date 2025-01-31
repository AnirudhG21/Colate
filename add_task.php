<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    $due_date = $_POST['due_date'];
    $user_id = 1; // Change this dynamically based on logged-in user

    $sql = "INSERT INTO tasks (user_id, task, due_date) VALUES ('$user_id', '$task', '$due_date')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Task added successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error adding task"]);
    }
}

$conn->close();
?>
