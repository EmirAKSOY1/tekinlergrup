<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
$page_meta = [
    'title'       => 'Kullanım Koşulları | Tekinler Grup Vinç',
    'description' => 'Tekinler Grup Vinç web sitesi kullanım koşulları.',
    'canonical'   => SITE_URL . '/kullanim-kosullari',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',          'url' => SITE_URL . '/'],
    ['name' => 'Kullanım Koşulları', 'url' => SITE_URL . '/kullanim-kosullari'],
];
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container"><div class="page-hero-content">
        <h1>Kullanım Koşulları</h1>
        <p>Web sitemizi kullanarak aşağıdaki koşulları kabul etmiş sayılırsınız.</p>
    </div></div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:800px;margin-inline:auto;">
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);line-height:1.8;color:var(--color-gray-700);">
                <h2>Kullanım Koşulları</h2>
                <p>Bu web sitesi <?= FIRMA_AD ?> tarafından işletilmektedir. Siteyi kullanarak bu koşulları kabul etmiş sayılırsınız.</p>

                <h3 style="margin-top:var(--spacing-6);">Hizmet Bilgileri</h3>
                <p>Web sitemizde yer alan hizmet bilgileri ve fiyatlar, gerçek koşullara göre farklılık gösterebilir. Kesin bilgi için bizimle doğrudan iletişime geçmenizi öneririz.</p>

                <h3 style="margin-top:var(--spacing-6);">Fikri Mülkiyet</h3>
                <p>Web sitemizin tüm içerikleri <?= FIRMA_AD ?>'e aittir. İzinsiz kullanımı yasaktır.</p>

                <h3 style="margin-top:var(--spacing-6);">Sorumluluk Sınırı</h3>
                <p>Web sitemizde yer alan bilgilerin doğruluğunu sağlamak için çaba göstermekteyiz. Ancak bilgilerin güncelliği ve doğruluğu konusunda garanti veremeyiz.</p>

                <h3 style="margin-top:var(--spacing-6);">İletişim</h3>
                <p>Kullanım koşulları hakkında: <a href="mailto:<?= FIRMA_EMAIL ?>" style="color:var(--color-accent);"><?= FIRMA_EMAIL ?></a></p>

                <p style="margin-top:var(--spacing-8);font-size:var(--fs-sm);color:var(--color-gray-500);">Son güncelleme: <?= date('d.m.Y') ?></p>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
