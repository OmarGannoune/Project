<?php
// list.php

require_once '../../config/database.php';
require_once '../../src/Models/Project.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /public/index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$projectModel = new Project();
$projects = $projectModel->getProjectsByUserId($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <link rel="stylesheet" href="/public/assets/css/styles.css">
</head>
<body>
    <h1>Your Projects</h1>
    <table>
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($projects)): ?>
                <tr>
                    <td colspan="3">No projects found.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($projects as $project): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($project['name']); ?></td>
                        <td><?php echo htmlspecialchars($project['status']); ?></td>
                        <td>
                            <a href="/src/Views/projects/edit.php?id=<?php echo $project['id']; ?>">Edit</a>
                            <a href="/src/Controllers/ProjectController.php?action=delete&id=<?php echo $project['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/src/Views/projects/create.php">Create New Project</a>
</body>
</html>