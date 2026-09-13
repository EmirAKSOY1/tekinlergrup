<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'Galeri | Vinç Hizmet Fotoğrafları | Tekinler Grup Vinç Balıkesir',
    'description' => 'Tekinler Grup Vinç\'in Balıkesir\'de gerçekleştirdiği vinç kiralama, kaldırma ve oto kurtarma projelerinden fotoğraflar.',
    'canonical'   => SITE_URL . '/galeri',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa', 'url' => SITE_URL . '/'],
    ['name' => 'Galeri',    'url' => SITE_URL . '/galeri'],
];
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Galeri</h1>
            <p>Balıkesir'de gerçekleştirdiğimiz projelerden fotoğraflar.</p>
        </div>
    </div>
</section>
<section class="section" aria-labelledby="galeri-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Projelerimiz</span>
            <h2 class="section-title" id="galeri-baslik">Saha Fotoğrafları</h2>
            <p class="section-desc">Gerçek projelerden görüntüler yakında eklenecektir. Çalışmalarımızı görmek için bizi takip edin.</p>
        </div>

        <!-- Galeri placeholder - gerçek fotoğraflarla değiştirin -->
        <div class="gallery-grid">
            <?php
            $galeri_items = [
                ['baslik' => 'Balıkesir Vinç Kiralama Projesi',        'ikon' => '🏗️', 'renk' => '#1a2540'],
                ['baslik' => 'Mobil Vinç Kaldırma Operasyonu',          'ikon' => '🚛', 'renk' => '#243058'],
                ['baslik' => 'Sepetli Vinç Yüksekte Çalışma',          'ikon' => '🧺', 'renk' => '#1e3a6e'],
                ['baslik' => 'Ağır Yük Taşıma Operasyonu',             'ikon' => '⚙️', 'renk' => '#1a2540'],
                ['baslik' => 'Oto Kurtarma Hizmet Aracı',              'ikon' => '🚨', 'renk' => '#7f1d1d'],
                ['baslik' => 'İnşaat Sahası Vinç Çalışması',           'ikon' => '🏢', 'renk' => '#243058'],
                ['baslik' => 'Balıkesir Endüstriyel Kaldırma',         'ikon' => '🔧', 'renk' => '#1e3a6e'],
                ['baslik' => 'Çekici Araç Hizmeti',                     'ikon' => '🚜', 'renk' => '#1a2540'],
            ];
            foreach ($galeri_items as $item): ?>
            <div class="gallery-item" role="img" aria-label="<?= htmlspecialchars($item['baslik']) ?>">
                <div style="width:100%;height:100%;background:<?= $item['renk'] ?>;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:8px;min-height:200px;">
                    <span style="font-size:3rem;" aria-hidden="true"><?= $item['ikon'] ?></span>
                    <span style="color:rgba(255,255,255,.6);font-size:12px;text-align:center;padding:0 8px;"><?= htmlspecialchars($item['baslik']) ?></span>
                </div>
                <div class="gallery-overlay">🔍</div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8">
            <p style="color:var(--color-gray-500);font-size:var(--fs-sm);margin-bottom:var(--spacing-4);">
                Daha fazla proje fotoğrafı için sosyal medya hesaplarımızı takip edebilirsiniz.
            </p>
            <?php if (FIRMA_INSTAGRAM): ?>
            <a href="<?= FIRMA_INSTAGRAM ?>" target="_blank" rel="noopener" class="btn btn-outline-dark btn-lg">Instagram'da Takip Et</a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
