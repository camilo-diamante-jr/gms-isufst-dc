<?php


// Database Connections
define('SERVERNAME', "localhost");
define('DBNAME', "gmsDb");
define('USERNAME', "root");
define('PASSWORD', "");

// DSN Configuration
$dsn = "mysql:host=" . SERVERNAME . ";dbname=" . DBNAME;
define('DSN', $dsn);
