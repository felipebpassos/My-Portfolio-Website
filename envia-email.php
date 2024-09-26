<?php

// Carrega o autoload do Composer para carregar as classes do PHPMailer e Dotenv
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Carrega as variáveis do arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Função para sanitizar os dados do formulário
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['whatsapp']) && isset($_POST['servico']) && isset($_POST['budget'])) {
    // Sanitiza os dados de entrada
    $nome = sanitize_input($_POST["nome"]);
    $whatsapp = sanitize_input($_POST["whatsapp"]);
    $servico = html_entity_decode(sanitize_input($_POST["servico"])); // Decodifica entidades HTML
    $budget = html_entity_decode(sanitize_input($_POST["budget"])); // Decodifica entidades HTML
    $mensagem = isset($_POST["mensagem"]) ? sanitize_input($_POST["mensagem"]) : ''; // Mensagem opcional

    // Cria uma nova instância do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP usando variáveis de ambiente
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = $_ENV['SMTP_SECURE'];
        $mail->Port = $_ENV['SMTP_PORT'];

        // Define o remetente e o destinatário
        $mail->setFrom($_ENV['SMTP_USER'], 'Site de Contato');
        $mail->addAddress($_ENV['SMTP_USER']);

        // Define o charset como UTF-8 para evitar problemas com acentuação
        $mail->CharSet = 'UTF-8';

        // Define o assunto do e-mail
        $mail->Subject = 'Novo contato do site';

        // Monta o corpo do e-mail
        $body = "Nome: $nome\n";
        $body .= "Whatsapp: $whatsapp\n";
        $body .= "Serviço: $servico\n";
        $body .= "Orçamento: $budget\n";
        $body .= $mensagem ? "Mensagem:\n$mensagem\n" : "Mensagem: [Não informada]\n";

        $mail->Body = $body;

        // Envia o e-mail
        $mail->send();
        header("Location: " . $_ENV['SITE_URL'] . "?success=Mensagem+enviada+com+sucesso!");
        exit();

    } catch (Exception $e) {
        header("Location: " . $_ENV['SITE_URL'] . "?error=Erro+no+envio+do+email");
        exit();
    }

} else {
    header("Location: " . $_ENV['SITE_URL'] . "?error=Erro+no+envio+da+mensagem");
    exit();
}
