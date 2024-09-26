<?php
include 'db.php';

$slug = $_GET['slug'] ?? '';

// Pega o post pelo slug
$stmt = $pdo->prepare("SELECT * FROM posts WHERE slug = ?");
$stmt->execute([$slug]);
$post = $stmt->fetch();

if (!$post) {
    echo "Post não encontrado.";
    exit;
}

// Carrega o conteúdo HTML do arquivo
$filename = './posts/' . $slug . '.html';
if (!file_exists($filename)) {
    echo "Conteúdo do post não encontrado.";
    exit;
}

$content = file_get_contents($filename);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <div>
        <?= $content ?>
    </div>
    <a href="index.php">Voltar</a>
</body>
</html>
