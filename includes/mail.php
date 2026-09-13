<?php
/**
 * Tekinler Grup Vinç — PHPMailer SMTP Mail Gönderici
 *
 * NOT: Bu dosya PHPMailer kütüphanesini gerektirir.
 * Kurulum: composer require phpmailer/phpmailer
 * VEYA manuel olarak vendor/ klasörüne ekleyin.
 * İndirme: https://github.com/PHPMailer/PHPMailer/releases
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Composer autoload yoksa manuel dahil et
$phpmailer_paths = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../vendor/phpmailer/phpmailer/src/Exception.php',
];

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/../vendor/phpmailer/PHPMailer.php')) {
    // Manuel kurulum için
    require_once __DIR__ . '/../vendor/phpmailer/PHPMailer.php';
    require_once __DIR__ . '/../vendor/phpmailer/SMTP.php';
    require_once __DIR__ . '/../vendor/phpmailer/Exception.php';
}

/**
 * İletişim formu e-postası gönder
 *
 * @param array $data [ad, email, telefon, hizmet, ilce, mesaj]
 * @return array [success: bool, message: string]
 */
function send_contact_email(array $data): array {
    require_once __DIR__ . '/config.php';

    // PHPMailer yüklü değilse fallback olarak mail() fonksiyonu kullan
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        return send_contact_email_fallback($data);
    }

    $mail = new PHPMailer(true);

    try {
        // Sunucu ayarları
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = SMTP_PORT;
        $mail->CharSet    = 'UTF-8';
        $mail->Encoding   = 'base64';

        // Gönderen
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addReplyTo($data['email'], $data['ad']);

        // Alıcı
        $mail->addAddress(SMTP_TO_EMAIL, SMTP_TO_NAME);

        // İçerik
        $mail->isHTML(true);
        $mail->Subject = '🔔 Yeni İletişim Formu: ' . htmlspecialchars($data['hizmet']) . ' — Tekinler Grup Vinç';
        $mail->Body    = build_email_html($data);
        $mail->AltBody = build_email_text($data);

        $mail->send();

        return [
            'success' => true,
            'message' => 'Mesajınız başarıyla iletildi. En kısa sürede sizinle iletişime geçeceğiz.',
        ];

    } catch (Exception $e) {
        error_log('PHPMailer Error: ' . $mail->ErrorInfo);
        return [
            'success' => false,
            'message' => 'Mesajınız gönderilemedi. Lütfen telefon veya WhatsApp üzerinden iletişime geçin.',
        ];
    }
}

/**
 * PHPMailer yoksa PHP mail() fonksiyonu ile fallback gönderim
 */
function send_contact_email_fallback(array $data): array {
    $to      = SMTP_TO_EMAIL;
    $subject = '=?UTF-8?B?' . base64_encode('Yeni İletişim Formu — Tekinler Grup Vinç') . '?=';
    $message = build_email_text($data);
    $headers = implode("\r\n", [
        'From: ' . SMTP_FROM_EMAIL,
        'Reply-To: ' . $data['email'],
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: base64',
    ]);

    $sent = mail($to, $subject, base64_encode($message), $headers);

    if ($sent) {
        return ['success' => true, 'message' => 'Mesajınız başarıyla iletildi.'];
    }
    return ['success' => false, 'message' => 'Mesaj gönderilemedi. Lütfen telefon ile iletişime geçin.'];
}

/**
 * E-posta HTML içeriği oluştur
 */
function build_email_html(array $data): string {
    $ad      = htmlspecialchars($data['ad'] ?? '—');
    $email   = htmlspecialchars($data['email'] ?? '—');
    $tel     = htmlspecialchars($data['telefon'] ?? '—');
    $hizmet  = htmlspecialchars($data['hizmet'] ?? '—');
    $ilce    = htmlspecialchars($data['ilce'] ?? '—');
    $mesaj   = nl2br(htmlspecialchars($data['mesaj'] ?? '—'));
    $tarih   = date('d.m.Y H:i');

    return <<<HTML
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
  .container { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 8px; overflow: hidden; }
  .header { background: #1a2540; color: #fff; padding: 24px 32px; }
  .header h1 { margin: 0; font-size: 20px; }
  .body { padding: 32px; }
  .field { margin-bottom: 16px; }
  .label { font-weight: bold; color: #6b7280; font-size: 12px; text-transform: uppercase; margin-bottom: 4px; }
  .value { color: #1f2937; font-size: 16px; }
  .message-box { background: #f9fafb; border-left: 4px solid #f59e0b; padding: 16px; border-radius: 4px; margin-top: 20px; }
  .footer { background: #f9fafb; padding: 16px 32px; font-size: 12px; color: #9ca3af; }
</style>
</head>
<body>
<div class="container">
  <div class="header">
    <h1>🔔 Yeni İletişim Formu — Tekinler Grup Vinç</h1>
    <p style="margin:4px 0 0;opacity:0.7;">{$tarih}</p>
  </div>
  <div class="body">
    <div class="field"><div class="label">Ad Soyad</div><div class="value">{$ad}</div></div>
    <div class="field"><div class="label">Telefon</div><div class="value">{$tel}</div></div>
    <div class="field"><div class="label">E-posta</div><div class="value">{$email}</div></div>
    <div class="field"><div class="label">Hizmet</div><div class="value">{$hizmet}</div></div>
    <div class="field"><div class="label">İlçe</div><div class="value">{$ilce}</div></div>
    <div class="message-box">
      <div class="label">Mesaj</div>
      <div class="value" style="margin-top:8px;">{$mesaj}</div>
    </div>
  </div>
  <div class="footer">Bu e-posta tekinlergrupvinc.com web sitesi iletişim formu üzerinden gönderilmiştir.</div>
</div>
</body>
</html>
HTML;
}

/**
 * E-posta düz metin içeriği oluştur
 */
function build_email_text(array $data): string {
    return sprintf(
        "YENİ İLETİŞİM FORMU — Tekinler Grup Vinç\n\n" .
        "Ad Soyad : %s\n" .
        "Telefon  : %s\n" .
        "E-posta  : %s\n" .
        "Hizmet   : %s\n" .
        "İlçe     : %s\n\n" .
        "Mesaj:\n%s\n\n" .
        "Tarih: %s",
        $data['ad']      ?? '—',
        $data['telefon'] ?? '—',
        $data['email']   ?? '—',
        $data['hizmet']  ?? '—',
        $data['ilce']    ?? '—',
        $data['mesaj']   ?? '—',
        date('d.m.Y H:i')
    );
}
