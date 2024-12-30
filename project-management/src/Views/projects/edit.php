<form action="/project-management/public/index.php?action=editProject" method="POST">
    <h2>Edit Project</h2>
    <label for="projectName">Project Name:</label>
    <input type="text" id="projectName" name="projectName" required>

    <label for="projectDescription">Project Description:</label>
    <textarea id="projectDescription" name="projectDescription" required></textarea>

    <label for="projectMembers">Project Members:</label>
    <input type="text" id="projectMembers" name="projectMembers" placeholder="Comma-separated user IDs">

    <input type="hidden" name="projectId" value="<?php echo htmlspecialchars($projectId); ?>">
    <button type="submit">Update Project</button>
</form>