<?php
require_once __DIR__ . '/lib/PHPMailer/Exception.php';
require_once __DIR__ . '/lib/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/lib/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ── Credentials (never commit this file) ──────────────────────
// Copy mail_config.example.php → mail_config.php and fill it in.
$cfg_file = __DIR__ . '/mail_config.php';
if (!file_exists($cfg_file)) {
    error_log('sendmail.php: mail_config.php not found');
    header('Location: index.php?status=error');
    exit;
}
$cfg = require $cfg_file;
// ──────────────────────────────────────────────────────────────

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

if (!$name || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?status=error');
    exit;
}

$topics = [];
foreach ([
    'check_embedded'  => 'Embedded / Hardware',
    'check_smarthome' => 'Smart Home / IoT',
    'check_software'  => 'Software-Entwicklung',
] as $key => $label) {
    if (!empty($_POST[$key])) {
        $topics[] = $label;
    }
}

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['gmail_user'];       // your Gmail address
    $mail->Password   = $cfg['gmail_app_password']; // 16-char app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom($cfg['gmail_user'], 'Kontaktformular julianw.de');
    $mail->addAddress($cfg['to']);
    $mail->addReplyTo($email, $name);

    $mail->Subject = "Kontaktanfrage von $name";

    $topic_line = $topics ? 'Themen: ' . implode(', ', $topics) . "\n" : '';
    $mail->Body = "Name:    $name\nE-Mail:  $email\n{$topic_line}\nNachricht:\n$message";

    $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) || str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json');

    $mail->send();
    if ($isAjax) { header('Content-Type: application/json'); echo '{"ok":true}'; }
    else          { header('Location: index.php?status=ok'); }
} catch (Exception $e) {
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
    if ($isAjax) { header('Content-Type: application/json'); http_response_code(500); echo '{"ok":false}'; }
    else          { header('Location: index.php?status=error'); }
}
exit;
