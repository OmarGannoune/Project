<?php
// create.php - Form for creating a new task

require_once '../../config/database.php';
require_once '../../src/Models/Task.php';

$task = new Task($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task->title = $_POST['title'];
    $task->description = $_POST['description'];
    $task->priority = $_POST['priority'];
    $task->status = $_POST['status'];
    $task->project_id = $_POST['project_id'];

    if ($task->create()) {
        echo "<div>Task created successfully!</div>";
    } else {
        echo "<div>Unable to create task. Please try again.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <h2>Create New Task</h2>
    <form action="create.php" method="post">
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="priority">Priority:</label>
        <select id="priority" name="priority" required>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>

        <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">

        <button type="submit">Create Task</button>
    </form>
</body>
</html>