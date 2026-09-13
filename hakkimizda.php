<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'Hakkımızda | Tekinler Grup Vinç Balıkesir',
    'description' => 'Tekinler Grup Vinç hakkında bilgi edinin. Balıkesir ve çevresinde profesyonel vinç kiralama, kaldırma-taşıma ve oto kurtarma hizmetleri sunuyoruz.',
    'canonical'   => SITE_URL . '/hakkimizda',
    'schema'      => [schema_local_business()],
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa',  'url' => SITE_URL . '/'],
    ['name' => 'Hakkımızda', 'url' => SITE_URL . '/hakkimizda'],
];

include __DIR__ . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Hakkımızda Sayfa Başlığı">
    <div class="container">
        <div class="page-hero-content">
            <h1>Hakkımızda</h1>
            <p>Balıkesir'in güvenilir vinç ve oto kurtarma firması olarak, her projede profesyonelliği ve güvenliği ön planda tutuyoruz.</p>
        </div>
    </div>
</section>

<!-- Hakkımızda İçerik -->
<section class="section" aria-labelledby="hakkimizda-baslik">
    <div class="container">
        <div style="display: grid; gap: var(--spacing-12); align-items: center;" class="about-grid">

            <div>
                <span class="section-label">Tekinler Grup Vinç</span>
                <h2 class="section-title" id="hakkimizda-baslik" style="text-align:left;">Balıkesir'in Güvenilir Vinç Firması</h2>
                <div style="display: flex; flex-direction: column; gap: var(--spacing-4); color: var(--color-gray-600); line-height: 1.8; font-size: var(--fs-lg);">
                    <p>
                        Tekinler Grup Vinç olarak Balıkesir ve çevresinde vinç kiralama, mobil vinç, sepetli vinç, kule vinç, ağır yük kaldırma, oto kurtarma ve çekici hizmetleri sunmaktayız.
                    </p>
                    <p>
                        Her projede güvenliği ve müşteri memnuniyetini ön planda tutan anlayışımızla, küçük operasyonlardan büyük endüstriyel projelere kadar geniş bir yelpazede hizmet veriyoruz.
                    </p>
                    <p>
                        Deneyimli operatörlerimiz, modern ve bakımlı ekipmanlarımız ile Balıkesir'in farklı ilçelerinde hızla sahaya çıkıyor ve işinizi zamanında tamamlıyoruz.
                    </p>
                </div>

                <div style="display: flex; flex-wrap: wrap; gap: var(--spacing-4); margin-top: var(--spacing-8);">
                    <a href="/iletisim" class="btn btn-primary btn-lg">Teklif Al</a>
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-outline-dark btn-lg" id="about-tel-btn">Bizi Arayın</a>
                </div>
            </div>

            <!-- Değerler -->
            <div>
                <h3 style="font-size: var(--fs-2xl); color: var(--color-primary); margin-bottom: var(--spacing-6);">Temel Değerlerimiz</h3>
                <div style="display: flex; flex-direction: column; gap: var(--spacing-4);">
                    <?php
                    $values = [
                        ['ikon' => '🛡️', 'baslik' => 'Güvenlik', 'aciklama' => 'Tüm operasyonlarımızda iş güvenliği standartlarına tam uyum sağlıyoruz.'],
                        ['ikon' => '🎯', 'baslik' => 'Profesyonellik', 'aciklama' => 'Deneyimli ve sertifikalı ekibimizle her işi titizlikle yürütüyoruz.'],
                        ['ikon' => '⚡', 'baslik' => 'Hız', 'aciklama' => 'Taleplerinize hızla yanıt verip, projenizi zamanında teslim ediyoruz.'],
                        ['ikon' => '🤝', 'baslik' => 'Güven', 'aciklama' => 'Şeffaf fiyatlandırma ve açık iletişimle güven temelli hizmet sunuyoruz.'],
                    ];
                    foreach ($values as $val): ?>
                    <div style="display:flex; align-items:flex-start; gap: var(--spacing-4); padding: var(--spacing-4); background: var(--color-gray-50); border-radius: var(--radius-lg); border: 1px solid var(--color-gray-200);">
                        <span style="font-size: 1.75rem; flex-shrink:0;"><?= $val['ikon'] ?></span>
                        <div>
                            <strong style="color: var(--color-primary); display:block; margin-bottom: var(--spacing-1);"><?= $val['baslik'] ?></strong>
                            <span style="color: var(--color-gray-600); font-size: var(--fs-sm);"><?= $val['aciklama'] ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hizmetlerimiz Özeti -->
<section class="section services-section" aria-labelledby="hizmet-ozet-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Hizmet Portföyü</span>
            <h2 class="section-title" id="hizmet-ozet-baslik">Sunduğumuz Hizmetler</h2>
        </div>
        <div class="grid-3">
            <?php foreach ($hizmetler as $hizmet): ?>
            <article class="service-card" style="--card-accent: <?= $hizmet['renk'] ?>;">
                <h3><?= htmlspecialchars($hizmet['baslik']) ?></h3>
                <p><?= htmlspecialchars($hizmet['ozet']) ?></p>
                <a href="<?= $hizmet['url'] ?>" class="service-card-link">
                    Detaylı Bilgi →
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-banner-content">
            <h2>Projeniz için Teklif Alın</h2>
            <p>Hizmetlerimiz hakkında bilgi almak veya teklif oluşturmak için bize ulaşın.</p>
            <div class="cta-banner-btns">
                <a href="/iletisim" class="btn btn-secondary btn-xl">Teklif Al</a>
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-outline-dark btn-xl" id="about-cta-tel"><?= FIRMA_TELEFON ?></a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
