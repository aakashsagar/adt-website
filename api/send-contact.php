<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../includes/mailer-config.php';
require_once __DIR__ . '/../includes/email-template.php';
require_once __DIR__ . '/../includes/phpmailer/Exception.php';
require_once __DIR__ . '/../includes/phpmailer/PHPMailer.php';
require_once __DIR__ . '/../includes/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function json(bool $ok, string $msg): void {
    echo json_encode(['success' => $ok, 'message' => $msg]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') json(false, 'Invalid request.');

// ── Honeypot: bots fill hidden fields, humans don't ──
if (!empty($_POST['_hp'])) json(false, 'Spam detected.');

// ── Rate limiting: max 3 submissions per IP per 10 minutes ──
$rateFile = sys_get_temp_dir() . '/adt_contact_' . md5($_SERVER['REMOTE_ADDR'] ?? '');
$window = 600; $limit = 3;
$times  = file_exists($rateFile) ? (json_decode(file_get_contents($rateFile), true) ?? []) : [];
$times  = array_values(array_filter($times, fn($t) => (time() - $t) < $window));
if (count($times) >= $limit) json(false, 'Too many submissions. Please wait a few minutes.');
$times[] = time();
file_put_contents($rateFile, json_encode($times), LOCK_EX);

$firstName = trim($_POST['first_name'] ?? '');
$lastName  = trim($_POST['last_name']  ?? '');
$email     = trim($_POST['email']      ?? '');
$phone     = trim($_POST['phone']      ?? '');
$company   = trim($_POST['company']    ?? '');
$service   = trim($_POST['service']    ?? '');
$budget    = trim($_POST['budget']     ?? '');
$message   = trim($_POST['message']   ?? '');

if (!$firstName || !$email || !$message) json(false, 'Please fill in all required fields.');
if (!filter_var($email, FILTER_VALIDATE_EMAIL))  json(false, 'Invalid email address.');

$fullName = $firstName . ' ' . $lastName;
$subject  = "Contact Enquiry from {$fullName}";

$fields = [
    'Full Name'    => $fullName,
    'Email'        => $email,
    'Phone'        => $phone,
    'Company'      => $company,
    'Service'      => $service,
    'Budget'       => $budget,
    'Source Page'  => 'Contact Us Page',
];

$html = buildEmailHtml($subject, 'Contact Form', $fields, $message);

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;

    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME, false);
    $mail->addAddress(MAIL_TO_EMAIL, MAIL_TO_NAME);
    $mail->addReplyTo($email, $fullName);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $subject;
    $mail->Body    = $html;
    $mail->AltBody = "Name: {$fullName}\nEmail: {$email}\nPhone: {$phone}\nCompany: {$company}\nService: {$service}\nBudget: {$budget}\n\nMessage:\n{$message}";

    $mail->send();
    json(true, 'Your message has been sent. We\'ll get back to you within 1 business day.');
} catch (Exception $e) {
    json(false, 'Mail error: ' . $mail->ErrorInfo);
}
