<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'elearning');
define('DB_USER', 'root');
define('DB_PASS', ''); // Update with your actual password

// Site-wide constants
define('BASE_URL', 'http://localhost/e-learning-platform/');
define('SITE_NAME', 'High School E-Learning');

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// PDO connection (singleton pattern)
function getDBConnection() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $pdo = new PDO($dsn, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    return $pdo;
}
