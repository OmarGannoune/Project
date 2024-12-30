<?php
require_once '../config/database.php';
require_once '../config/config.php';

// Start the session
session_start();

// Autoload classes
spl_autoload_register(function ($class_name) {
    include '../src/' . str_replace('\\', '/', $class_name) . '.php';
});

?>
<h1>jddj</h1>