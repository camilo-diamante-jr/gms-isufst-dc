<?php

<<<<<<< HEAD
$coreClasses = ['Route', 'App', 'Controller', 'View'];

=======
// Define core classes to be included
$coreClasses = ['Route', 'App', 'Controller', 'View'];

// Load core class files
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
foreach ($coreClasses as $class) {
    $filePath = __DIR__ . "/{$class}.php";
    if (!file_exists($filePath)) {
        die("Core file missing: {$class}.php");
    }
    require_once $filePath;
}

<<<<<<< HEAD

$controllerDir = __DIR__ . '/../app/controllers';


=======
// Define the controller directory
$controllerDir = __DIR__ . '/../app/controllers';

// Ensure the controllers directory exists and load controllers
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
if (is_dir($controllerDir)) {
    foreach (glob("{$controllerDir}/*.php") as $controllerFile) {
        require_once $controllerFile;
    }
} else {
    die("Controllers directory is missing: {$controllerDir}");
}

// Define the database configuration file
$databaseFile = __DIR__ . '/Database.php';

<<<<<<< HEAD

=======
// Ensure the database configuration file exists and load it
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
if (!file_exists($databaseFile)) {
    die("Database configuration file is missing.");
}

<<<<<<< HEAD

=======
// Initialize PDO for database connection
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
$pdo = require_once $databaseFile;
if (!$pdo instanceof PDO) {
    die("Failed to initialize database connection.");
}

<<<<<<< HEAD

=======
// Optional: Load session helper file if it exists
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
$sessionHelper = __DIR__ . '/../app/helpers/session.php';
if (file_exists($sessionHelper)) {
    require_once $sessionHelper;
} else {
    // Uncomment if you want to handle missing session helper
    die("Session helper file is missing.");
}

<<<<<<< HEAD

=======
// Start a session if not already started
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
