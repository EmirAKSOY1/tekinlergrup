<?php
/**
 * Tekinler Grup Vinç — İletişim Formu AJAX Handler
 */

// Yalnızca POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

header('Content-Type: application/json; charset=UTF-8');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/mail.php';

// ================================================================
// 1. CSRF Kontrolü
// ================================================================
if (session_status() === PHP_SESSION_NONE) session_start();

$csrf = $_POST['csrf_token'] ?? '';
if (!verify_csrf($csrf)) {
    echo json_encode(['success' => false, 'message' => 'Güvenlik doğrulaması başarısız. Sayfayı yenileyip tekrar deneyin.']);
    exit;
}

// ================================================================
// 2. Honeypot (Spam Koruması)
// ================================================================
if (!empty($_POST['website'])) {
    // Bot tuzağa düştü, sessizce başarı döndür
    echo json_encode(['success' => true, 'message' => 'Mesajınız başarıyla iletildi.']);
    exit;
}

// ================================================================
// 3. Rate Limiting
// ================================================================
$ip  = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
if (!check_rate_limit('contact_' . md5($ip), 5, 300)) {
    echo json_encode(['success' => false, 'message' => 'Çok fazla deneme yapıldı. Lütfen birkaç dakika bekleyip tekrar deneyin veya bizi telefonla arayın.']);
    exit;
}

// ================================================================
// 4. Veri Doğrulama
// ================================================================
$ad      = clean($_POST['ad']      ?? '');
$telefon = clean($_POST['telefon'] ?? '');
$email   = clean($_POST['email']   ?? '');
$hizmet  = clean($_POST['hizmet']  ?? '');
$ilce    = clean($_POST['ilce']    ?? '');
$mesaj   = clean($_POST['mesaj']   ?? '');
$kvkk    = isset($_POST['kvkk']) ? 1 : 0;

$errors = [];

if (empty($ad) || mb_strlen($ad) < 2) {
    $errors[] = 'Lütfen adınızı ve soyadınızı girin.';
}

if (empty($telefon) || !validate_phone($telefon)) {
    $errors[] = 'Lütfen geçerli bir telefon numarası girin.';
}

if (!empty($email) && !validate_email($email)) {
    $errors[] = 'Lütfen geçerli bir e-posta adresi girin.';
}

if (empty($hizmet)) {
    $errors[] = 'Lütfen hizmet türü seçin.';
}

if (!$kvkk) {
    $errors[] = 'KVKK Aydınlatma Metni\'ni kabul etmeniz gerekmektedir.';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// İzin verilen hizmet değerleri
$allowed_hizmetler = ['Vinç Kiralama', 'Mobil Vinç', 'Sepetli Vinç', 'Kule Vinç', 'Ağır Yük Kaldırma', 'Oto Kurtarma', 'Çekici', 'Diğer'];
if (!in_array($hizmet, $allowed_hizmetler)) {
    echo json_encode(['success' => false, 'message' => 'Geçersiz hizmet seçimi.']);
    exit;
}

// ================================================================
// 5. E-posta Gönder
// ================================================================
$result = send_contact_email([
    'ad'      => $ad,
    'telefon' => $telefon,
    'email'   => $email,
    'hizmet'  => $hizmet,
    'ilce'    => $ilce,
    'mesaj'   => $mesaj,
]);

// ================================================================
// 6. CSRF Token'ı yenile (güvenlik)
// ================================================================
if ($result['success']) {
    unset($_SESSION['csrf_token']);
}

echo json_encode($result);
