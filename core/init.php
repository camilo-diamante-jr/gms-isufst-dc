<?php

/**
 * 1. DEFENSIVE ERROR HANDLING
 * Catch Fatal Errors, hide UI messages, and log to developer console.
 */
register_shutdown_function(function () {
    $error = error_get_last();
    $fatalTypes = [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR];

    if ($error !== NULL && in_array($error['type'], $fatalTypes)) {
        // Log to server logs
        error_log("FATAL: {$error['message']} in {$error['file']} on line {$error['line']}");

        // Prepare data for the console
        $debug = [
            'message' => $error['message'],
            'file'    => $error['file'],
            'line'    => $error['line']
        ];

        if (ob_get_length()) ob_clean();
        include __DIR__ . '/../app/views/errors/500.php';
        exit();
    }
});

/**
 * 2. CORE CLASS LOADER
 */
$coreClasses = ['Route', 'App', 'Controller', 'View'];
foreach ($coreClasses as $class) {
    $file = __DIR__ . "/{$class}.php";
    if (!file_exists($file)) trigger_error("Core missing: {$class}", E_USER_ERROR);
    require_once $file;
}

/**
 * 3. DATABASE & HELPERS
 */
$databaseFile = __DIR__ . '/Database.php';
if (!file_exists($databaseFile)) trigger_error("Database config missing", E_USER_ERROR);

$pdo = require_once $databaseFile;
if (!$pdo instanceof PDO) trigger_error("PDO initialization failed", E_USER_ERROR);

$sessionHelper = __DIR__ . '/../app/helpers/session.php';
if (file_exists($sessionHelper)) require_once $sessionHelper;

/**
 * 4. AUTOMATIC CONTROLLER LOADING
 */
$controllerDir = __DIR__ . '/../app/controllers';
if (is_dir($controllerDir)) {
    foreach (glob("{$controllerDir}/*.php") as $filename) {
        require_once $filename;
    }
}

/**
 * 5. SESSION START
 */
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    session_start();
}
