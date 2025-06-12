<?php
if (session_status() === PHP_SESSION_NONE) session_start();

function checkAuth($requiredRole = null) {
    if (!isset($_SESSION['user'])) {
        header("Location: /login.php");
        exit();
    }

    if ($requiredRole && $_SESSION['user']['role'] !== $requiredRole) {
        echo "Unauthorized access.";
        exit();
    }
}
