<?php
// Genel hizmet sayfası şablonu — her hizmet için bu dosyayı kopyalayıp düzenleyin
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$hizmet_data = [
    'baslik'      => 'Balıkesir Mobil Vinç Hizmeti',
    'title'       => 'Mobil Vinç Balıkesir | Mobil Vinç Kiralama | Tekinler Grup',
    'description' => 'Balıkesir\'de hızlı sahaya ulaşan mobil vinç hizmeti. Her türlü kaldırma ve taşıma operasyonu için operatörlü mobil vinç kiralama.',
    'canonical'   => SITE_URL . '/hizmetler/mobil-vinc',
    'h1'          => 'Balıkesir Mobil Vinç Hizmeti',
    'ozet'        => 'Tekinler Grup Vinç olarak Balıkesir ve çevresinde sahaya hızla ulaşan <strong>mobil vinç hizmeti</strong> sunuyoruz. Yüksek manevra kabiliyeti sayesinde dar alanlarda bile operasyon gerçekleştirebilen mobil vinçlerimizle her türlü kaldırma ve taşıma işini güvenle yapıyoruz.',
    'renk'        => '#3b82f6',
    'ikon'        => '🚛',
    'kullanim'    => [
        '🏗️ İnşaat sahalarında malzeme kaldırma',
        '🏭 Endüstriyel ekipman taşıma ve yerleştirme',
        '⚡ Elektrik ve telekomünikasyon direk kurulumu',
        '🌿 Ağaç kesimi ve büyük nesne taşıma',
        '🔧 Makine montajı ve söküm operasyonları',
        '🏢 Çatı ve cephe çalışmaları',
    ],
];

$page_meta = [
    'title'      => $hizmet_data['title'],
    'description'=> $hizmet_data['description'],
    'canonical'  => $hizmet_data['canonical'],
    'schema'     => [schema_service($hizmet_data['baslik'], $hizmet_data['description'], '/hizmetler/mobil-vinc')],
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa',    'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Mobil Vinç',   'url' => SITE_URL . '/hizmetler/mobil-vinc'],
];

include __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1><?= $hizmet_data['h1'] ?></h1>
            <p>Yüksek manevra kabiliyetiyle her noktaya ulaşan mobil vinçlerimizle Balıkesir genelinde hizmet veriyoruz.</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:900px;margin-inline:auto;display:flex;flex-direction:column;gap:var(--spacing-10);">
            <div>
                <h2 class="section-title" style="text-align:left;"><?= $hizmet_data['baslik'] ?></h2>
                <p style="font-size:var(--fs-lg);color:var(--color-gray-600);line-height:1.8;"><?= $hizmet_data['ozet'] ?></p>
            </div>
            <div>
                <h3 style="font-size:var(--fs-2xl);color:var(--color-primary);margin-bottom:var(--spacing-6);">Kullanım Alanları</h3>
                <div class="grid-2">
                    <?php foreach ($hizmet_data['kullanim'] as $k): ?>
                    <div style="padding:var(--spacing-4);background:var(--color-gray-50);border-radius:var(--radius-md);border:1px solid var(--color-gray-200);"><?= $k ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);text-align:center;border:2px dashed var(--color-accent);">
                <h3 style="font-size:var(--fs-2xl);margin-bottom:var(--spacing-4);">Mobil Vinç Teklifi Alın</h3>
                <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-lg" id="mobil-tel-btn"><?= FIRMA_TELEFON ?></a>
                    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Mobil+vinç+hakkında+bilgi+almak+istiyorum." class="btn btn-whatsapp btn-lg" id="mobil-wa-btn" target="_blank" rel="noopener">WhatsApp</a>
                </div>
            </div>
            <div style="padding:var(--spacing-6);background:var(--color-gray-50);border-radius:var(--radius-lg);border-left:4px solid var(--color-accent);">
                <p style="color:var(--color-gray-600);">Balıkesir'de <a href="/hizmetler/vinc-kiralama" style="color:var(--color-accent);font-weight:600;">vinç kiralama</a> veya <a href="/hizmetler/sepetli-vinc" style="color:var(--color-accent);font-weight:600;">sepetli vinç</a> hizmetlerimizi de inceleyebilirsiniz.</p>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
