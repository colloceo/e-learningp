<?php
require_once __DIR__ . '/../config/config.php';

class DashboardController {
    public static function showDashboard() {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }

        $role = strtolower($_SESSION['user']['role']);
        switch ($role) {
            case 'admin':
                require __DIR__ . '/../views/dashboard/admin.php';
                break;
            case 'teacher':
                require __DIR__ . '/../views/dashboard/teacher.php';
                break;
            case 'student':
                require __DIR__ . '/../views/dashboard/student.php';
                break;
            default:
                echo "Invalid role.";
        }
    }
}
