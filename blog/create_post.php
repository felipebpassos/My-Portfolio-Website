<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $keywords = explode(',', $_POST['keywords']);

    // Upload da imagem de capa
    $cover_image = '';
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
        $target_dir = "uploads/covers/";
        $cover_image = $target_dir . basename($_FILES["cover_image"]["name"]);
        move_uploaded_file($_FILES["cover_image"]["tmp_name"], $cover_image);
    }

    // Inserção do post no banco de dados
    $stmt = $pdo->prepare("INSERT INTO posts (title, slug, cover_image) VALUES (?, ?, ?)");
    $stmt->execute([$title, $slug, $cover_image]);

    // Pega o ID do post recém-criado
    $post_id = $pdo->lastInsertId();

    // Inserção das palavras-chave e relacionamento
    foreach ($keywords as $keyword) {
        $keyword = trim($keyword);

        // Verifica se a palavra-chave já existe
        $stmt = $pdo->prepare("SELECT id FROM keywords WHERE keyword = ?");
        $stmt->execute([$keyword]);
        $keyword_id = $stmt->fetchColumn();

        // Se não existir, cria
        if (!$keyword_id) {
            $stmt = $pdo->prepare("INSERT INTO keywords (keyword) VALUES (?)");
            $stmt->execute([$keyword]);
            $keyword_id = $pdo->lastInsertId();
        }

        // Cria o relacionamento entre post e palavra-chave
        $stmt = $pdo->prepare("INSERT INTO posts_keywords (post_id, keyword_id) VALUES (?, ?)");
        $stmt->execute([$post_id, $keyword_id]);
    }

    // Processamento do conteúdo HTML
    $content = $_POST['content'];

    // Salvar o conteúdo HTML em um arquivo
    $filename = './posts/' . $slug . '.html';
    file_put_contents($filename, $content);

    // Redireciona de volta ao admin
    header("Location: admin.php");
    exit;
}
