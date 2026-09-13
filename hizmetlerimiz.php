<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'Hizmetlerimiz | Balıkesir Vinç Kiralama | Tekinler Grup Vinç',
    'description' => 'Tekinler Grup Vinç\'in Balıkesir\'de sunduğu tüm hizmetler: Vinç kiralama, mobil vinç, sepetli vinç, ağır yük kaldırma, oto kurtarma ve çekici.',
    'canonical'   => SITE_URL . '/hizmetlerimiz',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',   'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
];
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Balıkesir Vinç ve Oto Kurtarma Hizmetlerimiz</h1>
            <p>Profesyonel ekip ve modern ekipmanlarımızla her türlü kaldırma, taşıma ve kurtarma operasyonunda yanınızdayız.</p>
        </div>
    </div>
</section>
<section class="section services-section" aria-labelledby="hizmetler-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Hizmet Portföyü</span>
            <h2 class="section-title" id="hizmetler-baslik">Tüm Hizmetlerimiz</h2>
            <p class="section-desc">Balıkesir genelinde sunduğumuz profesyonel hizmetleri inceleyin.</p>
        </div>
        <div class="grid-3" style="gap:var(--spacing-6);">
            <?php foreach ($hizmetler as $hizmet): ?>
            <article class="service-card" style="--card-accent: <?= $hizmet['renk'] ?>;">
                <div class="service-card-icon" aria-hidden="true">
                    <?= render_icon($hizmet['ikon'], '', 36) ?>
                </div>
                <h3><?= htmlspecialchars($hizmet['baslik']) ?></h3>
                <p><?= htmlspecialchars($hizmet['ozet']) ?></p>
                <a href="<?= $hizmet['url'] ?>" class="service-card-link">Detaylı Bilgi →</a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="cta-banner">
    <div class="container">
        <div class="cta-banner-content">
            <h2>Hangi Hizmete İhtiyacınız Var?</h2>
            <p>Projenizi anlatın, size en uygun çözümü üretelim.</p>
            <div class="cta-banner-btns">
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-secondary btn-xl" id="srv-tel-btn"><?= FIRMA_TELEFON ?></a>
                <a href="/iletisim" class="btn btn-outline-dark btn-xl">Teklif Formu</a>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
