<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/User.php';

class AuthController {
    public static function login($email, $password) {
        $user = User::findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: /" . strtolower($user['role']));
            exit();
        } else {
            $_SESSION['error'] = "Invalid credentials.";
            header("Location: /login");
            exit();
        }
    }

    public static function logout() {
        session_destroy();
        header("Location: /login");
        exit();
    }

    public static function register($data) {
        $success = User::create($data);
        if ($success) {
            $_SESSION['message'] = "Registration successful. Please log in.";
            header("Location: /login");
        } else {
            $_SESSION['error'] = "Registration failed.";
            header("Location: /register");
        }
    }
}
