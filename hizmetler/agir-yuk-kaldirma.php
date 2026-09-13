<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
$page_meta = [
    'title'       => 'Balıkesir Ağır Yük Kaldırma | Endüstriyel Vinç Hizmeti | Tekinler Grup',
    'description' => 'Balıkesir\'de ağır yük kaldırma ve endüstriyel vinç hizmeti. Makine, ekipman ve ağır yük taşıma operasyonlarında deneyimli ekip.',
    'canonical'   => SITE_URL . '/hizmetler/agir-yuk-kaldirma',
    'schema'      => [schema_service('Balıkesir Ağır Yük Kaldırma', 'Balıkesir\'de endüstriyel ağır yük kaldırma ve taşıma vinç hizmeti.', '/hizmetler/agir-yuk-kaldirma')],
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',          'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz',      'url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Ağır Yük Kaldırma', 'url' => SITE_URL . '/hizmetler/agir-yuk-kaldirma'],
];
include __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Balıkesir Ağır Yük Kaldırma Hizmeti</h1>
            <p>Endüstriyel ekipman ve ağır yük operasyonlarında deneyimli ekibimiz ve güçlü vinçlerimizle yanınızdayız.</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:900px;margin-inline:auto;display:flex;flex-direction:column;gap:var(--spacing-10);">
            <div>
                <h2 class="section-title" style="text-align:left;">Balıkesir Ağır Yük Kaldırma</h2>
                <div style="font-size:var(--fs-lg);color:var(--color-gray-600);line-height:1.8;display:flex;flex-direction:column;gap:var(--spacing-4);">
                    <p>Tekinler Grup Vinç olarak Balıkesir'de <strong>ağır yük kaldırma ve taşıma</strong> operasyonlarında profesyonel hizmet sunuyoruz. Fabrika kurulumu, endüstriyel makine yerleştirme ve büyük ekipman taşıma işlerinde doğru çözümü sağlıyoruz.</p>
                    <p>Her ağır yük operasyonu öncesinde detaylı saha değerlendirmesi yapılmakta, güvenli kaldırma planı hazırlanmaktadır.</p>
                </div>
            </div>
            <div>
                <h3 style="font-size:var(--fs-2xl);color:var(--color-primary);margin-bottom:var(--spacing-6);">Uygulama Alanları</h3>
                <div class="grid-2">
                    <?php
                    $items = [
                        '🏭 Fabrika ve tesis makine kurulumu',
                        '⚙️ Büyük endüstriyel ekipman taşıma',
                        '🏗️ Prefabrik yapı elemanları montajı',
                        '🔩 Ağır imalat parçaları yerleştirme',
                        '🌊 Silo ve tank kurulum operasyonları',
                        '🏢 Jeneratör ve büyük makine transferi',
                    ];
                    foreach ($items as $item): ?>
                    <div style="padding:var(--spacing-4);background:var(--color-gray-50);border-radius:var(--radius-md);border:1px solid var(--color-gray-200);"><?= $item ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);text-align:center;border:2px dashed var(--color-accent);">
                <h3 style="font-size:var(--fs-2xl);margin-bottom:var(--spacing-4);">Ağır Yük Operasyonu İçin Teklif Alın</h3>
                <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-lg" id="agir-tel-btn"><?= FIRMA_TELEFON ?></a>
                    <a href="/iletisim" class="btn btn-outline-dark btn-lg">Proje Talebi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
