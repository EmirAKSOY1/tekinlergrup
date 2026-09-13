<?php
if (!headers_sent()) {
    http_response_code(500);
}

// Config ve fonksiyonları güvenli yükleme denemesi
$loaded = false;
if (file_exists(__DIR__ . '/includes/config.php')) {
    @require_once __DIR__ . '/includes/config.php';
    if (file_exists(__DIR__ . '/includes/functions.php')) {
        @require_once __DIR__ . '/includes/functions.php';
        $loaded = true;
    }
}

$tel = defined('FIRMA_TELEFON') ? FIRMA_TELEFON : '+90 5XX XXX XX XX';
$wa  = defined('FIRMA_WHATSAPP') ? FIRMA_WHATSAPP : '905XXXXXXXXX';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geçici Bir Hata Oluştu | Tekinler Grup Vinç</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .error-500-wrap {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background: #f8fafc;
            font-family: 'Inter', system-ui, sans-serif;
            text-align: center;
        }
        .error-500-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            max-width: 580px;
            width: 100%;
            padding: 50px 36px;
        }
        .error-500-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        .error-500-badge {
            display: inline-block;
            background: #fef3c7;
            color: #b45309;
            font-size: 12px;
            font-weight: 800;
            padding: 4px 14px;
            border-radius: 999px;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }
        .error-500-title {
            font-size: 26px;
            font-weight: 800;
            color: #1a2540;
            margin: 0 0 14px 0;
            line-height: 1.35;
        }
        .error-500-desc {
            font-size: 15px;
            color: #64748b;
            line-height: 1.7;
            margin: 0 0 28px 0;
        }
        .error-500-btns {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }
        .error-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 22px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .error-btn-primary {
            background: #1a2540;
            color: #ffffff;
        }
        .error-btn-primary:hover {
            background: #2d3f66;
            color: #ffffff;
        }
        .error-btn-accent {
            background: #f59e0b;
            color: #1a2540;
        }
        .error-btn-accent:hover {
            background: #d97706;
            color: #1a2540;
        }
        .error-btn-outline {
            background: transparent;
            color: #475569;
            border: 1px solid #cbd5e1;
        }
        .error-btn-outline:hover {
            background: #f1f5f9;
        }
    </style>
</head>
<body>
    <div class="error-500-wrap">
        <div class="error-500-card">
            <span class="error-500-icon" aria-hidden="true">🔧</span>
            <br>
            <span class="error-500-badge">SİSTEM BİLGİLENDİRMESİ</span>
            <h1 class="error-500-title">Geçici Bir Bağlantı Sorunu Oluştu</h1>
            <p class="error-500-desc">
                Sunucumuzda kısa süreli bir aksaklık meydana geldi. Teknik ekibimiz durumdan haberdar edildi ve çözmek için çalışıyor. Acil vinç veya oto kurtarma ihtiyacınız varsa lütfen bizi doğrudan telefonla arayın.
            </p>
            <div class="error-500-btns">
                <a href="tel:<?= $tel ?>" class="error-btn error-btn-accent">
                    📞 Bizi Arayın
                </a>
                <a href="https://wa.me/<?= $wa ?>?text=Merhaba%2C%20web%20sitenizden%20yazıyorum." target="_blank" rel="noopener" class="error-btn error-btn-primary">
                    💬 WhatsApp ile Yazın
                </a>
                <a href="/" class="error-btn error-btn-outline">
                    Ana Sayfaya Dön
                </a>
            </div>
        </div>
    </div>
</body>
</html>
