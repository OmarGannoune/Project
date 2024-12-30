<?php

class Project {
    private $db;
    private $table = 'projects';

    public function __construct($database) {
        $this->db = $database;
    }

    public function create($data) {
        // Code to create a new project in the database
    }

    public function read($id) {
        // Code to read a project from the database
    }

    public function update($id, $data) {
        // Code to update a project in the database
    }

    public function delete($id) {
        // Code to delete a project from the database
    }

    public function getAllProjects() {
        // Code to get all projects from the database
    }

    public function getProjectMembers($id) {
        // Code to get members of a specific project
    }

    public function assignMember($projectId, $userId) {
        // Code to assign a user as a member to a project
    }

    public function removeMember($projectId, $userId) {
        // Code to remove a user from a project
    }
}