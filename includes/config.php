<?php
// Gzip / Zlib Çıktı Sıkıştırma (Lighthouse Document Latency & Transfer Optimizasyonu)
if (!headers_sent() && extension_loaded('zlib')) {
    ini_set('zlib.output_compression', '1');
    ini_set('zlib.output_compression_level', '6');
}

/**
 * Tekinler Grup Vinç — Merkezi Yapılandırma Dosyası
 * Tüm site ayarları, firma bilgileri ve SMTP konfigürasyonu burada.
 * Gerçek bilgilerinizi aşağıdaki placeholder'ların yerine yazın.
 */

// ============================================================
// 1. SITE AYARLARI
// ============================================================
define('SITE_NAME',        'Tekinler Grup Vinç');
define('SITE_TAGLINE',     'Balıkesir\'in Güvenilir Vinç ve Oto Kurtarma Hizmeti');
define('SITE_URL',         'https://www.tekinlergrupvinc.com'); // Gerçek domain
define('SITE_LANG',        'tr');
define('SITE_CHARSET',     'UTF-8');

// ============================================================
// 2. FİRMA BİLGİLERİ (NAP — Name, Address, Phone)
// ============================================================
define('FIRMA_AD',         'Tekinler Grup Vinç');
define('FIRMA_ADRES',      'Bursa Yolu Üstü, Hasan Basri Çantay Mahallesi 10065 Sokak, Eski, Tank Çiftliği Yolu Girişi Yanı, 10100 Altıeylül/Balıkesir');          // Gerçek adres
define('FIRMA_SEHIR',      'Balıkesir');
define('FIRMA_ULKE',       'TR');
define('FIRMA_POSTA',      '10100');                       // Posta kodu
define('FIRMA_TELEFON',    '+90 531 292 81 55');           // Gerçek telefon
define('FIRMA_TELEFON_RAW','905312928155');                // Başında + olmadan (wa.me için)
define('FIRMA_EMAIL',      'info@tekinlergrupvinc.com');   // Gerçek e-posta
define('FIRMA_WHATSAPP',   '905312928155');                // WhatsApp numarası
define('FIRMA_MAPS_URL',   'https://maps.app.goo.gl/4bgqShX2XNYVb2eHA'); // Google Maps linki
define('FIRMA_MAPS_EMBED', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.729911739691!2d27.907116375786725!3d39.63328477157632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b701a8b324b81d%3A0xa6087ea08672cc80!2zWWXEn2VubGVyIFZpbsOn!5e0!3m2!1str!2str!4v1789303279076!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>');   // Maps embed src
define('FIRMA_KURULUS',    '2010');                        // Kuruluş yılı (gerçek)

// Çalışma saatleri
define('FIRMA_SAAT_HFT',   'Pazartesi–Cuma: 08:00–18:00');
define('FIRMA_SAAT_CMT',   'Cumartesi: 09:00–14:00');
define('FIRMA_SAAT_PAZ',   'Pazar: 09:00–14:00');
define('FIRMA_OTO_SAAT',   '7/24 Oto Kurtarma Hizmeti');

// Sosyal medya
define('FIRMA_INSTAGRAM',  'https://www.instagram.com/yegenlervinc'); // Gerçek URL
define('FIRMA_FACEBOOK',   'https://www.facebook.com/tugberkcan123');  // Gerçek URL
define('FIRMA_YOUTUBE',    '');                            // Varsa YouTube kanalı

// ============================================================
// 3. SMTP AYARLARI (Gmail)
// ============================================================
define('SMTP_HOST',        'smtp.gmail.com');
define('SMTP_PORT',        587);
define('SMTP_ENCRYPTION',  'tls');                         // tls veya ssl
define('SMTP_USER',        'GMAIL_ADRESINIZ@gmail.com');   // Gmail adresiniz
define('SMTP_PASS',        'GMAIL_APP_PASSWORD_BURAYA');   // Gmail App Password (2FA ile)
define('SMTP_FROM_EMAIL',  'GMAIL_ADRESINIZ@gmail.com');
define('SMTP_FROM_NAME',   'Tekinler Grup Vinç Web Sitesi');
define('SMTP_TO_EMAIL',    'info@tekinlergrupvinc.com');   // Form e-postalarının gideceği adres
define('SMTP_TO_NAME',     'Tekinler Grup Vinç');

// ============================================================
// 4. ANALİTİK
// ============================================================
define('GA4_MEASUREMENT_ID', 'G-XXXXXXXXXX');              // Google Analytics 4 ID
define('GTM_ID',             '');                          // Google Tag Manager ID (varsa)
define('GSC_VERIFICATION',   '');                          // Google Search Console doğrulama kodu

// ============================================================
// 5. LOGO ve GÖRSELLER
// ============================================================
define('SITE_LOGO',        SITE_URL . '/assets/images/tekinler-grup-vinc-logo.png');
define('OG_DEFAULT_IMAGE', SITE_URL . '/assets/images/tekinler-grup-vinc-og.jpg');

// ============================================================
// 6. GELİŞTİRME & PRODUCTION HATA YÖNETİMİ
// ============================================================
define('DEBUG_MODE', false); // Canlı ortamda mutlaka false tutun

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', __DIR__ . '/../error.log');

    // İstisnaları (Exceptions) yakala ve kullanıcıya temiz 500 sayfası göster
    set_exception_handler(function ($exception) {
        error_log('Uncaught Exception: ' . $exception->getMessage() . ' in ' . $exception->getFile() . ':' . $exception->getLine());
        if (!headers_sent()) {
            http_response_code(500);
        }
        if (file_exists(__DIR__ . '/../500.php')) {
            include __DIR__ . '/../500.php';
        } else {
            echo '<!DOCTYPE html><html lang="tr"><head><meta charset="UTF-8"><title>Geçici Bir Hata Oluştu</title></head><body style="font-family:sans-serif;text-align:center;padding:50px;"><h1>Geçici Bir Hata Oluştu</h1><p>Teknik ekibimiz bilgilendirildi. Lütfen daha sonra tekrar deneyiniz.</p></body></html>';
        }
        exit;
    });

    // Ölümcül PHP hatalarını (Fatal Error, Parse Error vb.) yakala
    register_shutdown_function(function () {
        $error = error_get_last();
        if ($error !== null && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
            error_log("Fatal Error [{$error['type']}]: {$error['message']} in {$error['file']}:{$error['line']}");
            if (ob_get_length()) {
                ob_clean();
            }
            if (!headers_sent()) {
                http_response_code(500);
            }
            if (file_exists(__DIR__ . '/../500.php')) {
                include __DIR__ . '/../500.php';
            } else {
                echo '<!DOCTYPE html><html lang="tr"><head><meta charset="UTF-8"><title>Geçici Bir Hata Oluştu</title></head><body style="font-family:sans-serif;text-align:center;padding:50px;"><h1>Geçici Bir Hata Oluştu</h1><p>Teknik ekibimiz bilgilendirildi. Lütfen daha sonra tekrar deneyiniz.</p></body></html>';
            }
            exit;
        }
    });
}

// ============================================================
// 7. HİZMET VERİLEN İLÇELER
// ============================================================
$hizmet_ilceleri = [
    'Altıeylül', 'Karesi', 'Edremit', 'Bandırma', 'Gönen',
    'Ayvalık', 'Burhaniye', 'Erdek', 'Susurluk', 'Bigadiç',
    'Sındırgı', 'Dursunbey', 'Kepsut', 'Manyas', 'Marmara',
    'Soma', 'Akhisar', 'Balya', 'Manisa'
];

// ============================================================
// 8. HİZMETLER
// ============================================================
$hizmetler = [
    [
        'baslik'  => 'Vinç Kiralama',
        'url'     => '/hizmetler/vinc-kiralama',
        'ikon'    => 'icon-crane',
        'ozet'    => 'Balıkesir ve çevresinde profesyonel vinç kiralama hizmeti. Operatörlü ve tam donanımlı vinçlerimizle yanınızdayız.',
        'renk'    => '#f59e0b',
    ],
    [
        'baslik'  => 'Mobil Vinç',
        'url'     => '/hizmetler/mobil-vinc',
        'ikon'    => 'icon-mobile-crane',
        'ozet'    => 'Sahaya hızla ulaşan mobil vinç hizmetimizle her türlü kaldırma ve taşıma operasyonunu gerçekleştiriyoruz.',
        'renk'    => '#3b82f6',
    ],
    [
        'baslik'  => 'Sepetli Vinç',
        'url'     => '/hizmetler/sepetli-vinc',
        'ikon'    => 'icon-basket-crane',
        'ozet'    => 'Yüksekte çalışma gerektiren işlerde güvenli ve verimli sepetli vinç hizmeti sunuyoruz.',
        'renk'    => '#10b981',
    ],
    [
        'baslik'  => 'Ağır Yük Kaldırma',
        'url'     => '/hizmetler/agir-yuk-kaldirma',
        'ikon'    => 'icon-heavy-lift',
        'ozet'    => 'Endüstriyel ekipman ve ağır yük kaldırma operasyonlarında uzman ekibimiz ve güçlü vinçlerimizle hizmetinizdeyiz.',
        'renk'    => '#ef4444',
    ],
    [
        'baslik'  => 'Oto Kurtarma',
        'url'     => '/hizmetler/oto-kurtarma',
        'ikon'    => 'icon-car-rescue',
        'ozet'    => 'Balıkesir ve çevresinde 7/24 oto kurtarma ve çekici hizmeti. Araç kazası, arıza veya kurtarma için hızla yanınızdayız.',
        'renk'    => '#f97316',
    ],
    [
        'baslik'  => 'Çekici',
        'url'     => '/hizmetler/cekici',
        'ikon'    => 'icon-tow-truck',
        'ozet'    => 'Her türlü araç için çekici hizmetimizle Balıkesir\'in her noktasına ulaşıyoruz.',
        'renk'    => '#06b6d4',
    ],
];
