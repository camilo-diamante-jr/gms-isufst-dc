<?php
require_once dirname(__DIR__) . '/config/config.php';

function databaseConnection()
{
    try {
        // Construct the DSN string using your constants
        $dsn = "mysql:host=" . SERVERNAME . ";dbname=" . DBNAME . ";charset=utf8mb4";

        // The PDO constructor expects: DSN, Username, Password, Options
        $pdo = new PDO(
            $dsn,
            USERNAME, // Ensure this matches the constant name in your config.php
            PASSWORD,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );

        return $pdo;
    } catch (PDOException $e) {
        // Ensure this path is correct relative to where this file is called
        if (file_exists(__DIR__ . '/../app/views/errors/503.php')) {
            require_once __DIR__ . '/../app/views/errors/503.php';
        }
        die("Database connection failed: " . $e->getMessage());
    }
}

return databaseConnection();
