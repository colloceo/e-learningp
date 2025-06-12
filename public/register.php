<?php
session_start();
require_once '../config/config.php';
require_once '../models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User($pdo);
    $success = $user->create([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'role' => 'student' // Default role
    ]);
    if ($success) {
        header('Location: login.php');
        exit;
    } else {
        $error = "Registration failed. Please try again.";
    }
}
include '../includes/header.php';
?>

<h2>Register</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input name="name" placeholder="Full Name" required><br>
    <input name="email" type="email" placeholder="Email" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>

<?php include '../includes/footer.php'; ?>
