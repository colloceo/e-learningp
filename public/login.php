<?php
session_start();
require_once '../config/config.php';
require_once '../models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel = new User($pdo);
    $user = $userModel->authenticate($_POST['email'], $_POST['password']);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid login credentials.";
    }
}
include '../includes/header.php';
?>

<h2>Login</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input name="email" type="email" placeholder="Email" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<?php include '../includes/footer.php'; ?>
