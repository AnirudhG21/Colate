<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST['task_id'];
    $task = $_POST['task'];
    $due_date = $_POST['due_date'];

    $stmt = $conn->prepare("UPDATE tasks SET task = ?, due_date = ? WHERE id = ?");
    $stmt->bind_param("ssi", $task, $due_date, $task_id);
    
    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
}
?>
