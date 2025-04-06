<?php

// Import the Database class from the Core namespace
use Core\Database;

// Load the configuration from the config.php file
$config = require base_path('config.php');

// Create a new instance of the Database class using the database configuration
$db = new Database($config['database']);

// Simulate the current authenticated user ID (this would normally come from the session)
$currentUserId = 1;

// Query the database to fetch the note with the ID passed via GET
$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id'] // Prevents SQL injection with bound parameters
])->findOrFail(); // Throws an error if the note is not found

// Check that the current user is the owner of the note
authorize($note['user_id'] === $currentUserId);

// Render the 'show.view.php' view and pass the necessary data
view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
