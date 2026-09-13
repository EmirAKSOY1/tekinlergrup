<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
$page_meta = [
    'title'       => 'KVKK Aydınlatma Metni | Tekinler Grup Vinç',
    'description' => 'Tekinler Grup Vinç KVKK Kişisel Verilerin Korunması Kanunu kapsamında kişisel veri işleme aydınlatma metni.',
    'canonical'   => SITE_URL . '/kvkk',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa', 'url' => SITE_URL . '/'],
    ['name' => 'KVKK',      'url' => SITE_URL . '/kvkk'],
];
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container"><div class="page-hero-content">
        <h1>KVKK Aydınlatma Metni</h1>
        <p>Kişisel Verilerin Korunması Kanunu kapsamında bilgilendirme.</p>
    </div></div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:800px;margin-inline:auto;" class="prose">
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);line-height:1.8;color:var(--color-gray-700);">

                <p><strong>Veri Sorumlusu:</strong> <?= FIRMA_AD ?></p>
                <p><strong>Adres:</strong> <?= FIRMA_ADRES ?>, <?= FIRMA_SEHIR ?></p>
                <p><strong>E-posta:</strong> <?= FIRMA_EMAIL ?></p>
                <p><strong>Telefon:</strong> <?= FIRMA_TELEFON ?></p>

                <h2 style="margin-top:var(--spacing-8);">1. Toplanan Kişisel Veriler</h2>
                <p>Web sitemiz üzerinden iletişim formu aracılığıyla; ad soyad, telefon numarası ve e-posta adresi bilgilerinizi toplamaktayız. Bu veriler yalnızca hizmet taleplerinizi yanıtlamak amacıyla kullanılmaktadır.</p>

                <h2 style="margin-top:var(--spacing-8);">2. Kişisel Verilerin İşlenme Amacı</h2>
                <ul style="margin-left:var(--spacing-6);margin-top:var(--spacing-3);">
                    <li>Hizmet taleplerinizin değerlendirilmesi ve yanıtlanması</li>
                    <li>Teklif ve bilgilendirme iletişimlerinin sağlanması</li>
                    <li>Yasal yükümlülüklerin yerine getirilmesi</li>
                </ul>

                <h2 style="margin-top:var(--spacing-8);">3. Kişisel Verilerin Saklanma Süresi</h2>
                <p>İletişim formu aracılığıyla iletilen veriler, hizmet ilişkisinin sona ermesinden itibaren yasal saklama süresi boyunca muhafaza edilmektedir.</p>

                <h2 style="margin-top:var(--spacing-8);">4. Haklarınız</h2>
                <p>KVKK'nın 11. maddesi kapsamında kişisel verilerinize ilişkin haklarınızı kullanmak için <?= FIRMA_EMAIL ?> adresine e-posta gönderebilirsiniz.</p>

                <p style="margin-top:var(--spacing-8);font-size:var(--fs-sm);color:var(--color-gray-500);">Son güncelleme: <?= date('d.m.Y') ?></p>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
