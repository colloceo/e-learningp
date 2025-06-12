<?php
include '../../includes/header.php';
include '../shared/breadcrumbs.php';
?>

<h2>All Courses</h2>
<ul>
    <!-- Assume $courses array is passed -->
    <?php foreach ($courses as $course): ?>
        <li><a href="course_detail.php?id=<?= $course['id'] ?>"><?= htmlspecialchars($course['title']) ?></a></li>
    <?php endforeach; ?>
</ul>

<?php include '../../includes/footer.php'; ?>
