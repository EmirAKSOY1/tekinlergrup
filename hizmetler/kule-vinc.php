<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
$page_meta = [
    'title'       => 'Kule Vinç Balıkesir | Şantiye Kule Vinç Kiralama | Tekinler Grup',
    'description' => 'Balıkesir\'de büyük inşaat ve şantiye projelerine özel kule vinç kiralama hizmeti. Proje bazlı çözümler için teklif alın.',
    'canonical'   => SITE_URL . '/hizmetler/kule-vinc',
    'schema'      => [schema_service('Balıkesir Kule Vinç', 'Balıkesir\'de büyük inşaat projelerine özel kule vinç kiralama.', '/hizmetler/kule-vinc')],
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',    'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Kule Vinç',    'url' => SITE_URL . '/hizmetler/kule-vinc'],
];
include __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Balıkesir Kule Vinç Hizmeti</h1>
            <p>Büyük inşaat ve şantiye projeleriniz için proje bazlı kule vinç çözümleri sunuyoruz.</p>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:900px;margin-inline:auto;display:flex;flex-direction:column;gap:var(--spacing-10);">
            <div>
                <h2 class="section-title" style="text-align:left;">Balıkesir Kule Vinç Kiralama</h2>
                <p style="font-size:var(--fs-lg);color:var(--color-gray-600);line-height:1.8;">
                    Büyük inşaat projelerinde kritik bir role sahip olan kule vinç hizmetini Balıkesir'de proje bazlı çözümlerle sunuyoruz. Şantiye altyapısı, yüksek katlı yapılar ve büyük endüstriyel tesisler için doğru kapasitede kule vinç sağlıyoruz.
                </p>
            </div>
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);border:1px solid var(--color-gray-200);">
                <h3 style="font-size:var(--fs-xl);color:var(--color-primary);margin-bottom:var(--spacing-4);">Proje Görüşmesi İçin</h3>
                <p style="color:var(--color-gray-600);margin-bottom:var(--spacing-6);">Kule vinç projeleri detaylı bir planlama gerektirir. Projenizin kapsamını paylaşın, size özel çözüm üretelim.</p>
                <div style="display:flex;flex-wrap:wrap;gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-lg" id="kule-tel-btn"><?= FIRMA_TELEFON ?></a>
                    <a href="/iletisim" class="btn btn-outline-dark btn-lg">Proje Talebi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
