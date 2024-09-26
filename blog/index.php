<?php
include 'db.php';

// Consulta para buscar todos os posts
$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Simples</title>
</head>
<body>
    <h1>Posts</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="post.php?slug=<?= htmlspecialchars($post['slug']) ?>">
                    <img src="<?= htmlspecialchars($post['cover_image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" style="width:100px; height:auto;">
                    <?= htmlspecialchars($post['title']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
