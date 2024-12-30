<?php
session_start();
require_once '../../config/database.php';
require_once '../../src/Models/User.php';
require_once '../../src/Models/Project.php';

$userId = $_SESSION['user_id'];
$user = new User();
$userData = $user->getUserById($userId);
$projects = new Project();
$userProjects = $projects->getProjectsByUserId($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($userData['name']); ?></h1>
        <nav>
            <a href="../../public/index.php">Home</a>
            <a href="../../src/Controllers/AuthController.php?action=logout">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Your Projects</h2>
        <ul>
            <?php foreach ($userProjects as $project): ?>
                <li>
                    <a href="../../src/Views/projects/edit.php?id=<?php echo $project['id']; ?>">
                        <?php echo htmlspecialchars($project['name']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>