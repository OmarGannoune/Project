<?php
session_start();
require_once '../../config/database.php';
require_once '../../src/Controllers/ProjectController.php';
require_once '../../src/Controllers/UserController.php';

$projectController = new ProjectController();
$userController = new UserController();

if (!isset($_SESSION['user_id']) || $_SESSION['role_global'] !== 'admin') {
    header('Location: /public/index.php');
    exit();
}

$projects = $projectController->getAllProjects();
$users = $userController->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="/public/index.php">Home</a>
            <a href="/public/src/Views/auth/logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Project Management</h2>
            <a href="/public/src/Views/projects/create.php">Create New Project</a>
            <h3>All Projects</h3>
            <ul>
                <?php foreach ($projects as $project): ?>
                    <li><?php echo htmlspecialchars($project['name']); ?> - <a href="/public/src/Views/projects/edit.php?id=<?php echo $project['id']; ?>">Edit</a></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2>User Management</h2>
            <h3>All Users</h3>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li><?php echo htmlspecialchars($user['username']); ?> - <a href="/public/src/Views/users/edit.php?id=<?php echo $user['id']; ?>">Edit</a></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>
</html>