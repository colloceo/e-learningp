<?php
include '../../includes/header.php';
include '../shared/breadcrumbs.php';
?>

<h2>Create New Course</h2>
<form method="POST">
    <input name="title" placeholder="Course Title" required><br>
    <textarea name="description" placeholder="Course Description"></textarea><br>
    <button type="submit">Create Course</button>
</form>

<?php include '../../includes/footer.php'; ?>
