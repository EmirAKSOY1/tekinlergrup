<?php
/**
 * Tekinler Grup Vinç — Header (Üst Bölüm)
 * Her sayfada include edilir.
 * $page_meta = [title, description, canonical, og_image, og_type, noindex, schema]
 * $breadcrumbs = [{name, url}, ...]
 */

if (session_status() === PHP_SESSION_NONE) session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$page_meta    = $page_meta ?? [];
$breadcrumbs  = $breadcrumbs ?? [];
$csrf_token   = generate_csrf();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?= render_meta($page_meta) ?>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">

    <!-- LCP Hero Görseli Erken Keşif (Lighthouse LCP Optimizasyonu) -->
    <?php if (empty($breadcrumbs) || (isset($breadcrumbs) && count($breadcrumbs) <= 1)): ?>
    <link rel="preload" as="image" href="/assets/images/hero-vinc-balikesir.webp" type="image/webp" fetchpriority="high">
    <?php endif; ?>

    <!-- Google Fonts (Non-Render-Blocking Asenkron Yükleme) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto:wght@400;500&display=swap" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto:wght@400;500&display=swap">
    </noscript>

    <!-- Ana CSS (Minified & Optimized) -->
    <?php
    $css_file = file_exists(__DIR__ . '/../assets/css/style.min.css') ? '/assets/css/style.min.css' : '/assets/css/style.css';
    $css_path = __DIR__ . '/..' . $css_file;
    ?>
    <link rel="stylesheet" href="<?= $css_file ?>?v=<?= filemtime($css_path) ?>">

    <!-- Schema.org JSON-LD -->
    <?php if (!empty($page_meta['schema'])): ?>
    <?php foreach ((array)$page_meta['schema'] as $schema): ?>
    <script type="application/ld+json"><?= $schema ?></script>
    <?php endforeach; ?>
    <?php endif; ?>

    <!-- Google Search Console Doğrulama -->
    <?php if (GSC_VERIFICATION): ?>
    <meta name="google-site-verification" content="<?= GSC_VERIFICATION ?>">
    <?php endif; ?>

    <!-- Google Analytics 4 -->
    <?php if (GA4_MEASUREMENT_ID && GA4_MEASUREMENT_ID !== 'G-XXXXXXXXXX'): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_MEASUREMENT_ID ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= GA4_MEASUREMENT_ID ?>');

        // CTA Dönüşüm Takibi
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="tel:"]').forEach(el => {
                el.addEventListener('click', () => gtag('event', 'phone_click', {event_category: 'CTA'}));
            });
            document.querySelectorAll('a[href*="wa.me"]').forEach(el => {
                el.addEventListener('click', () => gtag('event', 'whatsapp_click', {event_category: 'CTA'}));
            });
        });
    </script>
    <?php endif; ?>
</head>
<body>

<!-- ====== SKIP TO CONTENT (Erişilebilirlik) ====== -->
<a href="#main-content" class="skip-link">İçeriğe geç</a>

<!-- ====== HEADER ====== -->
<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">

            <!-- Logo -->
            <a href="/" class="site-logo" aria-label="<?= SITE_NAME ?> - Ana Sayfa">
                <span class="logo-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect width="40" height="40" rx="8" fill="#f59e0b"/>
                        <path d="M8 32V12L20 6L32 12V32" stroke="#1a2540" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 6V32" stroke="#1a2540" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8 18L32 18" stroke="#1a2540" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="20" cy="6" r="2.5" fill="#1a2540"/>
                        <path d="M20 6L28 3" stroke="#1a2540" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="28" cy="3" r="1.5" fill="#1a2540"/>
                    </svg>
                </span>
                <span class="logo-text">
                    <span class="logo-brand">Tekinler Grup</span>
                    <span class="logo-sub">Vinç</span>
                </span>
            </a>

            <!-- Desktop Nav -->
            <nav class="main-nav" id="main-nav" aria-label="Ana Navigasyon">
                <ul role="list">
                    <li><a href="/" class="<?= is_active('/') ?>">Ana Sayfa</a></li>
                    <li class="has-dropdown">
                        <a href="/hizmetlerimiz" class="<?= is_active('/hizmet') ?>" aria-haspopup="true" aria-expanded="false">
                            Hizmetlerimiz <span class="arrow-down">▾</span>
                        </a>
                        <ul class="dropdown" role="list">
                            <li><a href="/hizmetler/vinc-kiralama"><?= render_icon('crane', '', 18) ?> Vinç Kiralama</a></li>
                            <li><a href="/hizmetler/mobil-vinc"><?= render_icon('mobile-crane', '', 18) ?> Mobil Vinç</a></li>
                            <li><a href="/hizmetler/sepetli-vinc"><?= render_icon('basket-crane', '', 18) ?> Sepetli Vinç</a></li>
                            <li><a href="/hizmetler/agir-yuk-kaldirma"><?= render_icon('heavy-lift', '', 18) ?> Ağır Yük Kaldırma</a></li>
                            <li><a href="/hizmetler/oto-kurtarma"><?= render_icon('car-rescue', '', 18) ?> Oto Kurtarma</a></li>
                            <li><a href="/hizmetler/cekici"><?= render_icon('tow-truck', '', 18) ?> Çekici</a></li>
                        </ul>
                    </li>
                    <li><a href="/hakkimizda" class="<?= is_active('/hakkimizda') ?>">Hakkımızda</a></li>
                    <li><a href="/referanslar" class="<?= is_active('/referanslar') ?>">Referanslar</a></li>
                    <li><a href="/galeri" class="<?= is_active('/galeri') ?>">Galeri</a></li>
                    <li><a href="/blog" class="<?= is_active('/blog') ?>">Blog</a></li>
                    <li><a href="/iletisim" class="<?= is_active('/iletisim') ?>">İletişim</a></li>
                </ul>
            </nav>

            <!-- Header CTA -->
            <div class="header-cta">
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-outline btn-sm" id="header-tel-btn" aria-label="Bizi Arayın">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                    Bizi Arayın
                </a>
                <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20hizmeti%20hakkında%20bilgi%20almak%20istiyorum." class="btn btn-whatsapp btn-sm" id="header-wa-btn" target="_blank" rel="noopener" aria-label="WhatsApp ile Yazın">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    WhatsApp
                </a>
            </div>

            <!-- Hamburger -->
            <button class="hamburger" id="hamburger" aria-label="Menüyü Aç/Kapat" aria-expanded="false" aria-controls="main-nav">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<!-- ====== BREADCRUMB ====== -->
<?php if (!empty($breadcrumbs)): ?>
<div class="breadcrumb-wrap">
    <div class="container">
        <?= render_breadcrumb($breadcrumbs) ?>
    </div>
</div>
<?php endif; ?>

<!-- ====== MOBİL STICKY CTA ====== -->
<div class="mobile-cta-bar" id="mobile-cta-bar" aria-label="Hızlı İletişim">
    <a href="tel:<?= FIRMA_TELEFON ?>" class="mobile-cta-btn mobile-cta-tel" id="mobile-tel-btn">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
        <span>Hemen Ara</span>
    </a>
    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20hizmeti%20hakkında%20bilgi%20almak%20istiyorum." class="mobile-cta-btn mobile-cta-wa" id="mobile-wa-btn" target="_blank" rel="noopener">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        <span>WhatsApp</span>
    </a>
    <a href="/iletisim" class="mobile-cta-btn mobile-cta-quote" id="mobile-quote-btn">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
        <span>Teklif Al</span>
    </a>
</div>

<!-- ====== MAIN CONTENT START ====== -->
<main id="main-content" tabindex="-1">
