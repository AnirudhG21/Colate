<?php
include 'db_connect.php';

$user_id = 1; // Replace with actual logged-in user ID

// Prepare the SQL statement
$sql = "SELECT * FROM tasks WHERE user_id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["status" => "error", "message" => "Failed to prepare SQL statement: " . $conn->error]));
}

$stmt->bind_param("i", $user_id);

if (!$stmt->execute()) {
    die(json_encode(["status" => "error", "message" => "Failed to execute SQL statement: " . $stmt->error]));
}

$result = $stmt->get_result();

$tasks = [];
while ($row = $result->fetch_assoc()) {
    $tasks[] = $row;
}

if (empty($tasks)) {
    echo json_encode(["status" => "success", "tasks" => [], "total" => 0, "active" => 0, "completed" => 0]);
} else {
    echo json_encode(["status" => "success", "tasks" => $tasks, "total" => count($tasks), "active" => count(array_filter($tasks, function($task) { return $task['status'] !== 'Completed'; })), "completed" => count(array_filter($tasks, function($task) { return $task['status'] === 'Completed'; }))]);
}

$stmt->close();
$conn->close();
?>