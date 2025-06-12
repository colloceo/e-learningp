<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<nav>
    <ul>
        <li><a href="/">Home</a></li>

        <?php if (isset($_SESSION['user'])): ?>
            <?php if ($_SESSION['user']['role'] === 'Admin'): ?>
                <li><a href="/admin/dashboard.php">Dashboard</a></li>
            <?php elseif ($_SESSION['user']['role'] === 'Teacher'): ?>
                <li><a href="/teacher/dashboard.php">Dashboard</a></li>
            <?php elseif ($_SESSION['user']['role'] === 'Student'): ?>
                <li><a href="/student/dashboard.php">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="/logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="/login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
