<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Novo Post</title>
</head>
<body>
    <h1>Novo Post</h1>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>

        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>

        <label for="slug">Slug (URL Amigável):</label>
        <input type="text" name="slug" id="slug" required>
        <br>

        <label for="cover_image">Imagem de Capa:</label>
        <input type="file" name="cover_image" id="cover_image" required>
        <br>

        <label for="keywords">Palavras-Chave (separadas por vírgula):</label>
        <input type="text" name="keywords" id="keywords" required>
        <br>

        <label for="content">Conteúdo (HTML):</label>
        <textarea name="content" id="content" rows="10" placeholder="Cole seu HTML aqui" required></textarea>
        <br>

        <button type="submit">Criar Post</button>
    </form>

    <a href="index.php">Voltar para o Blog</a>

    <?php
    // Autenticação simples
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'];
        $correct_password = 'sua_senha_aqui'; // Defina sua senha aqui

        if ($password !== $correct_password) {
            echo "<p style='color:red;'>Senha incorreta. Tente novamente.</p>";
        } else {
            // Aqui você pode colocar o restante do código para processar o formulário
            // Como já temos o código do `create_post.php`, podemos incluir aqui a lógica necessária
            include 'create_post.php';
        }
    }
    ?>
</body>
</html>
