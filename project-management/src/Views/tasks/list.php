<?php
// tasks/list.php

// Include necessary files
require_once '../../config/database.php';
require_once '../../src/Models/Task.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();

// Create Task object
$task = new Task($db);

// Fetch tasks associated with a project
$projectId = $_GET['project_id']; // Assuming project_id is passed as a query parameter
$tasks = $task->getTasksByProjectId($projectId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>
    <h1>Task List for Project ID: <?php echo htmlspecialchars($projectId); ?></h1>
    <table>
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($tasks): ?>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($task['name']); ?></td>
                        <td><?php echo htmlspecialchars($task['status']); ?></td>
                        <td><?php echo htmlspecialchars($task['priority']); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $task['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $task['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No tasks found for this project.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>