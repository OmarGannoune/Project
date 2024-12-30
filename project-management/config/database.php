<?php
// Database connection settings
$host = '127.0.0.1:3307'; // Database host
$username = 'root'; // Database username
$password = ''; // Database password
$dbname = 'project_management'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>