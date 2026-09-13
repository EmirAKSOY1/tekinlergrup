<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$page_meta = [
    'title'       => 'Balıkesir Sepetli Vinç Kiralama | Yüksekte Güvenli Çalışma | Tekinler Grup',
    'description' => 'Balıkesir\'de sepetli vinç kiralama. Yüksekte çalışma, cephe bakımı, aydınlatma direği, elektrik hattı ve ağaç budama işlerinde güvenli sepetli vinç hizmeti.',
    'canonical'   => SITE_URL . '/hizmetler/sepetli-vinc',
    'schema'      => [schema_service('Balıkesir Sepetli Vinç', 'Balıkesir\'de yüksekte güvenli çalışma için sepetli vinç kiralama hizmeti.', '/hizmetler/sepetli-vinc')],
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',    'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Sepetli Vinç', 'url' => SITE_URL . '/hizmetler/sepetli-vinc'],
];
include __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Balıkesir Sepetli Vinç Hizmeti</h1>
            <p>Yüksekte çalışma gerektiren tüm işlerde güvenli ve verimli sepetli vinç çözümleri sunuyoruz.</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:900px;margin-inline:auto;display:flex;flex-direction:column;gap:var(--spacing-10);">
            <div>
                <h2 class="section-title" style="text-align:left;">Balıkesir Sepetli Vinç Kiralama</h2>
                <p style="font-size:var(--fs-lg);color:var(--color-gray-600);line-height:1.8;">Tekinler Grup Vinç olarak Balıkesir ve çevresinde <strong>sepetli vinç kiralama hizmeti</strong> sunmaktayız. Yüksekte çalışma gerektiren bina cephe onarımı, aydınlatma direkleri, ağaç budama ve elektrik hattı çalışmalarında güvenli çalışma platformu sağlıyoruz.</p>
            </div>
            <div>
                <h3 style="font-size:var(--fs-2xl);color:var(--color-primary);margin-bottom:var(--spacing-6);">Sepetli Vinç Kullanım Alanları</h3>
                <div class="grid-2">
                    <?php
                    $items = [
                        '🏢 Bina cephe onarımı ve boyası',
                        '💡 Aydınlatma direği kurulumu ve bakımı',
                        '🌲 Yüksek ağaç budama ve kesimi',
                        '⚡ Elektrik hattı ve trafo çalışmaları',
                        '📡 Anten ve uydu sistemi kurulumu',
                        '🎆 Bayrak ve pankart asma işlemleri',
                    ];
                    foreach ($items as $item): ?>
                    <div style="padding:var(--spacing-4);background:var(--color-gray-50);border-radius:var(--radius-md);border:1px solid var(--color-gray-200);"><?= $item ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);text-align:center;border:2px dashed var(--color-accent);">
                <h3 style="font-size:var(--fs-2xl);margin-bottom:var(--spacing-4);">Sepetli Vinç Teklifi Alın</h3>
                <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-lg" id="sepetli-tel-btn"><?= FIRMA_TELEFON ?></a>
                    <a href="/iletisim" class="btn btn-outline-dark btn-lg">Teklif Formu</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
