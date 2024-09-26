<?php
$dsn = 'mysql:host=localhost;dbname=blog;charset=utf8';
$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    // Configurando o usuário como 'root' e a senha como uma string vazia
    $pdo = new PDO($dsn, 'root', '', $options);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
