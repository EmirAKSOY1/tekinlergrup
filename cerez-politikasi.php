<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
$page_meta = [
    'title'       => 'Çerez Politikası | Tekinler Grup Vinç',
    'description' => 'Tekinler Grup Vinç web sitesinde kullanılan çerezler hakkında bilgi edinin.',
    'canonical'   => SITE_URL . '/cerez-politikasi',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',       'url' => SITE_URL . '/'],
    ['name' => 'Çerez Politikası','url' => SITE_URL . '/cerez-politikasi'],
];
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container"><div class="page-hero-content">
        <h1>Çerez Politikası</h1>
        <p>Web sitemizde kullanılan çerezler hakkında bilgi.</p>
    </div></div>
</section>
<section class="section">
    <div class="container">
        <div style="max-width:800px;margin-inline:auto;">
            <div style="background:var(--color-gray-50);border-radius:var(--radius-xl);padding:var(--spacing-8);line-height:1.8;color:var(--color-gray-700);">
                <h2>Çerez Politikası</h2>
                <p>Bu web sitesi daha iyi bir kullanıcı deneyimi sunmak amacıyla çerez (cookie) kullanmaktadır.</p>

                <h3 style="margin-top:var(--spacing-6);">Kullanılan Çerez Türleri</h3>
                <table style="width:100%;border-collapse:collapse;margin-top:var(--spacing-4);">
                    <thead>
                        <tr style="background:var(--color-primary);color:white;">
                            <th style="padding:12px;text-align:left;border-radius:4px 0 0 0;">Çerez Adı</th>
                            <th style="padding:12px;text-align:left;">Amaç</th>
                            <th style="padding:12px;text-align:left;border-radius:0 4px 0 0;">Süre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom:1px solid var(--color-gray-200);">
                            <td style="padding:12px;">tgv_cookie_ok</td>
                            <td style="padding:12px;">Çerez onayı durumunu kaydeder</td>
                            <td style="padding:12px;">Kalıcı (localStorage)</td>
                        </tr>
                        <tr style="border-bottom:1px solid var(--color-gray-200);">
                            <td style="padding:12px;">PHPSESSID</td>
                            <td style="padding:12px;">Oturum yönetimi (form güvenliği)</td>
                            <td style="padding:12px;">Oturum süresi</td>
                        </tr>
                        <tr>
                            <td style="padding:12px;">_ga, _gid</td>
                            <td style="padding:12px;">Google Analytics analitik çerezleri</td>
                            <td style="padding:12px;">2 yıl / 24 saat</td>
                        </tr>
                    </tbody>
                </table>

                <h3 style="margin-top:var(--spacing-6);">Çerezleri Reddetme</h3>
                <p>Tarayıcı ayarlarınızdan çerezleri devre dışı bırakabilirsiniz. Ancak bu durumda sitenin bazı özellikleri düzgün çalışmayabilir.</p>

                <h3 style="margin-top:var(--spacing-6);">İletişim</h3>
                <p>Çerez politikamız hakkında sorularınız için: <a href="mailto:<?= FIRMA_EMAIL ?>" style="color:var(--color-accent);"><?= FIRMA_EMAIL ?></a></p>

                <p style="margin-top:var(--spacing-8);font-size:var(--fs-sm);color:var(--color-gray-500);">Son güncelleme: <?= date('d.m.Y') ?></p>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
