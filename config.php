<?php

ob_start();
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "localhost"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "root"); // database user name eg. root
define('DB_DATABASE', "petadoption"); //database name
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc

//url information
define('BASE_URL', 'http://localhost/petadoption/');

try {
    // Attempt to establish a database connection
    $conn = new PDO(DB_TYPE . ":host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
    // Set PDO error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // If connection fails, display an error message and exit
    echo "Connection failed: " . $e->getMessage();
    exit;
}
// included main class
require_once 'app/Admin.php';
$admin = new Admin();
