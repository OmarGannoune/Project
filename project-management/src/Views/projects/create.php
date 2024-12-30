<form action="/project-management/public/index.php?action=createProject" method="POST">
    <h2>Create New Project</h2>
    <label for="projectName">Project Name:</label>
    <input type="text" id="projectName" name="projectName" required>

    <label for="projectDescription">Project Description:</label>
    <textarea id="projectDescription" name="projectDescription" required></textarea>

    <label for="projectMembers">Add Members (comma-separated emails):</label>
    <input type="text" id="projectMembers" name="projectMembers">

    <button type="submit">Create Project</button>
</form>