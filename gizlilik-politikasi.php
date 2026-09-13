<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
$page_meta = [
    'title'       => 'Gizlilik Politikası | Tekinler Grup Vinç',
    'description' => 'Tekinler Grup Vinç gizlilik politikası. Web sitemizde toplanan veriler ve kullanım şartları hakkında bilgi edinin.',
    'canonical'   => SITE_URL . '/gizlilik-politikasi',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',          'url' => SITE_URL . '/'],
    ['name' => 'Gizlilik Politikası','url' => SITE_URL . '/gizlilik-politikasi'],
];
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container"><div class="page-hero-content">
        <h1>Gizlilik Politikası</h1>
        <p>Kişisel verilerinizin güvenliği bizim için önemlidir.</p>
    </div></div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:800px;margin-inline:auto;">
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);line-height:1.8;color:var(--color-gray-700);">
                <h2>Gizlilik Politikası</h2>
                <p><?= FIRMA_AD ?> olarak, kullanıcılarımızın gizliliğine saygı duyuyoruz. Bu politika, web sitemiz üzerinden toplanan verilerin nasıl işlendiğini açıklamaktadır.</p>

                <h3 style="margin-top:var(--spacing-6);">Toplanan Bilgiler</h3>
                <p>Web sitemizde yalnızca iletişim formu aracılığıyla gönüllü olarak paylaştığınız bilgiler (ad, telefon, e-posta) toplanmaktadır. Bu bilgiler üçüncü taraflarla paylaşılmamaktadır.</p>

                <h3 style="margin-top:var(--spacing-6);">Çerezler</h3>
                <p>Web sitemiz, deneyiminizi iyileştirmek amacıyla çerez kullanmaktadır. Detaylar için <a href="/cerez-politikasi" style="color:var(--color-accent);">Çerez Politikası</a> sayfamızı inceleyebilirsiniz.</p>

                <h3 style="margin-top:var(--spacing-6);">Google Analytics</h3>
                <p>Web sitemizde ziyaretçi sayısı ve davranışlarını analiz etmek amacıyla Google Analytics kullanılmaktadır. Bu veriler anonim olup kişisel bilgi içermemektedir.</p>

                <h3 style="margin-top:var(--spacing-6);">İletişim</h3>
                <p>Gizlilik politikamız hakkında sorularınız için: <a href="mailto:<?= FIRMA_EMAIL ?>" style="color:var(--color-accent);"><?= FIRMA_EMAIL ?></a></p>

                <p style="margin-top:var(--spacing-8);font-size:var(--fs-sm);color:var(--color-gray-500);">Son güncelleme: <?= date('d.m.Y') ?></p>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
