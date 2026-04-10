<?php
/**
 * send-mail.php
 * Processa o formulário "Trabalhe Conosco" de contato.php
 * Coloque este arquivo na raiz do projeto (mesmo nível de index.php).
 *
 * Configuração: altere apenas as constantes abaixo.
 */

// ─── CONFIGURAÇÕES ────────────────────────────────────────────────
define('MAIL_TO',      'contato@universodown.org'); // destino
define('MAIL_SUBJECT', '[Site] Trabalhe Conosco — nova mensagem');
define('ALLOWED_ORIGIN', 'https://universodown.org'); // domínio do site
// ──────────────────────────────────────────────────────────────────

header('Content-Type: application/json; charset=utf-8');

// Só aceita POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Método não permitido.']);
    exit;
}

// Coleta e sanitiza campos
$nome     = trim(strip_tags($_POST['nome']     ?? ''));
$email    = trim(strip_tags($_POST['email']    ?? ''));
$mensagem = trim(strip_tags($_POST['mensagem'] ?? ''));

// Validação básica
$erros = [];

if ($nome === '') {
    $erros[] = 'O campo Nome é obrigatório.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'Informe um e-mail válido.';
}

if ($mensagem === '') {
    $erros[] = 'O campo Mensagem é obrigatório.';
}

if (!empty($erros)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'errors' => $erros]);
    exit;
}

// Proteção básica contra header injection
$nome     = str_replace(["\r", "\n"], '', $nome);
$email    = str_replace(["\r", "\n"], '', $email);

// Monta o e-mail
$corpo  = "Nome: {$nome}\n";
$corpo .= "E-mail: {$email}\n\n";
$corpo .= "Mensagem:\n{$mensagem}\n";

$headers  = "From: Site Universo Down <noreply@universodown.org>\r\n";
$headers .= "Reply-To: {$nome} <{$email}>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$enviado = mail(MAIL_TO, MAIL_SUBJECT, $corpo, $headers);

if ($enviado) {
    echo json_encode(['ok' => true, 'message' => 'Mensagem enviada com sucesso!']);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Falha ao enviar. Tente novamente mais tarde.']);
}