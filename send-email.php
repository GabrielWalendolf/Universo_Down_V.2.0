<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/phpmailer/Exception.php';
require_once __DIR__ . '/lib/phpmailer/PHPMailer.php';
require_once __DIR__ . '/lib/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Método não permitido.']);
    exit;
}

$nome     = trim(strip_tags($_POST['nome']     ?? ''));
$email    = trim(strip_tags($_POST['email']    ?? ''));
$mensagem = trim(strip_tags($_POST['mensagem'] ?? ''));

$erros = [];
if ($nome === '')                                          $erros[] = 'O campo Nome é obrigatório.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = 'Informe um e-mail válido.';
if ($mensagem === '')                                      $erros[] = 'O campo Mensagem é obrigatório.';

if (!empty($erros)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'errors' => $erros]);
    exit;
}

$nome  = str_replace(["\r", "\n"], '', $nome);
$email = str_replace(["\r", "\n"], '', $email);

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom(SMTP_USER, 'Site Universo Down');
    $mail->addAddress(MAIL_TO);
    $mail->addReplyTo($email, $nome);

    $mail->Subject = '[Site] Trabalhe Conosco — Universo Down';
    $mail->Body    = "Nome: {$nome}\nE-mail: {$email}\n\nMensagem:\n{$mensagem}";

    $mail->send();
    echo json_encode(['ok' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Falha ao enviar.']);
}
