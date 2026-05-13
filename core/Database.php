<?php

require_once __DIR__ . '/../config/config.php';

function databaseConnection()
{
    try {
        // Use the constants to create a PDO connection
        $pdo = new PDO(
<<<<<<< HEAD
            DSN,
            USERNAME,
=======
            "mysql:host=" . SERVER_NAME . ";dbname=" . DB_NAME,
            USER_NAME,
>>>>>>> 01dcdc0d700303676f7ddf847efab3f928d232bc
            PASSWORD,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );

        // Return the PDO object
        return $pdo;
    } catch (PDOException $e) {
        require_once '../app/views/errors/503.php';
        die("Database connection failed: " . $e->getMessage());
    }
}

// Return the PDO connection
return databaseConnection();
