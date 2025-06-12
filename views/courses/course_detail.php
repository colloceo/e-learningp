<?php
include '../../includes/header.php';
include '../shared/breadcrumbs.php';
?>

<h2><?= htmlspecialchars($course['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($course['description'])) ?></p>

<?php include '../../includes/footer.php'; ?>
