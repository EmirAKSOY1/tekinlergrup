<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

http_response_code(404);

$page_meta = [
    'title'   => '404 — Sayfa Bulunamadı | Tekinler Grup Vinç',
    'description' => 'Aradığınız sayfa bulunamadı. Tekinler Grup Vinç ana sayfasına veya hizmet sayfalarımıza yönlenebilirsiniz.',
    'noindex' => true,
];

include __DIR__ . '/includes/header.php';
?>
<section style="min-height:60vh;display:flex;align-items:center;background:var(--color-gray-50);">
    <div class="container">
        <div class="text-center" style="max-width:600px;margin-inline:auto;padding:var(--spacing-16) 0;">
            <div style="font-size:6rem;margin-bottom:var(--spacing-6);" aria-hidden="true">🏗️</div>
            <h1 style="font-size:var(--fs-6xl);color:var(--color-accent);margin-bottom:var(--spacing-4);font-weight:900;">404</h1>
            <h2 style="font-size:var(--fs-2xl);color:var(--color-primary);margin-bottom:var(--spacing-4);">Sayfa Bulunamadı</h2>
            <p style="color:var(--color-gray-500);font-size:var(--fs-lg);margin-bottom:var(--spacing-8);">Aradığınız sayfaya ulaşılamadı. Sayfa taşınmış, silinmiş veya hiç var olmamış olabilir.</p>
            <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:var(--spacing-4);">
                <a href="/" class="btn btn-primary btn-lg" id="404-home-btn">Ana Sayfaya Dön</a>
                <a href="/hizmetlerimiz" class="btn btn-outline-dark btn-lg" id="404-srv-btn">Hizmetlerimiz</a>
                <a href="/iletisim" class="btn btn-secondary btn-lg" id="404-contact-btn">İletişim</a>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
