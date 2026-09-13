<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
$page_meta = [
    'title'       => 'Balıkesir Çekici Hizmeti | 7/24 Araç Çekme | Tekinler Grup Vinç',
    'description' => 'Balıkesir ve çevresinde 7/24 çekici hizmeti. Arıza, kaza veya araç taşıma için güvenilir çekici hizmeti. Hızlı müdahale için hemen arayın.',
    'canonical'   => SITE_URL . '/hizmetler/cekici',
    'schema'      => [schema_service('Balıkesir Çekici', 'Balıkesir\'de 7/24 çekici ve araç çekme hizmeti.', '/hizmetler/cekici')],
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',    'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Çekici',       'url' => SITE_URL . '/hizmetler/cekici'],
];
include __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(249,115,22,.15);border:1px solid rgba(249,115,22,.3);color:#fed7aa;padding:4px 12px;border-radius:999px;font-size:14px;font-weight:700;margin-bottom:16px;text-transform:uppercase;letter-spacing:.05em;">
                🚜 7/24 Çekici Hizmeti
            </div>
            <h1>Balıkesir Çekici Hizmeti</h1>
            <p>Arıza, kaza veya araç taşıma ihtiyacınız için Balıkesir genelinde 7/24 çekici hizmetindeyiz.</p>
            <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-xl" style="margin-top:var(--spacing-6);display:inline-flex;" id="cekici-hero-tel">Hemen Ara: <?= FIRMA_TELEFON ?></a>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:900px;margin-inline:auto;display:flex;flex-direction:column;gap:var(--spacing-10);">
            <div>
                <h2 class="section-title" style="text-align:left;">Balıkesir Çekici Hizmeti</h2>
                <p style="font-size:var(--fs-lg);color:var(--color-gray-600);line-height:1.8;">Balıkesir ve çevresinde 7/24 <strong>çekici hizmeti</strong> sunmaktayız. Araç arızası, kaza, yolda kalma veya araç transferi ihtiyaçlarınızda hızla yanınıza geliyor, aracınızı güvenle istediğiniz noktaya ulaştırıyoruz. <a href="/hizmetler/oto-kurtarma" style="color:var(--color-accent);font-weight:600;">Oto kurtarma</a> hizmetimizle birlikte kapsamlı yol yardım desteği sağlıyoruz.</p>
            </div>
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);text-align:center;border:2px dashed var(--color-accent);">
                <h3 style="font-size:var(--fs-2xl);margin-bottom:var(--spacing-4);">Çekici İçin Hemen Arayın</h3>
                <p style="color:var(--color-gray-600);margin-bottom:var(--spacing-6);">7/24 hizmetinizdeyiz. Beklemeden arayın.</p>
                <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-xl" id="cekici-cta-tel"><?= FIRMA_TELEFON ?></a>
                    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Çekici+hizmetine+ihtiyacım+var." class="btn btn-whatsapp btn-xl" id="cekici-cta-wa" target="_blank" rel="noopener">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
