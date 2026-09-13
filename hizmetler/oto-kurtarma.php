<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$page_meta = [
    'title'       => 'Balıkesir Oto Kurtarma ve Çekici Hizmeti | 7/24 | Tekinler Grup Vinç',
    'description' => 'Balıkesir ve çevresinde 7/24 oto kurtarma ve çekici hizmeti. Araç kazası, arıza veya yolda kalma durumlarında hızla yanınızdayız. Hemen arayın.',
    'canonical'   => SITE_URL . '/hizmetler/oto-kurtarma',
    'schema'      => [
        schema_service('Balıkesir Oto Kurtarma', 'Balıkesir ve çevresinde 7/24 oto kurtarma ve çekici hizmeti. Araç kurtarma, çekme ve yol yardım.', '/hizmetler/oto-kurtarma'),
    ],
];

$faq_items = [
    ['soru' => 'Oto kurtarma hizmetiniz 7/24 mı?', 'cevap' => 'Evet, oto kurtarma ve çekici hizmetimiz 7 gün 24 saat kesintisiz olarak sunulmaktadır.'],
    ['soru' => 'Balıkesir\'in hangi bölgelerine oto kurtarma hizmeti veriyorsunuz?', 'cevap' => 'Balıkesir merkez ve hizmet verdiğimiz ilçelerde oto kurtarma ve çekici hizmeti sunuyoruz. Detaylı bilgi için bizi arayın.'],
    ['soru' => 'Hangi araçlar için oto kurtarma hizmeti sunuyorsunuz?', 'cevap' => 'Otomobil, minibüs, kamyonet ve benzeri araçlar için oto kurtarma ve çekici hizmeti sunmaktayız.'],
    ['soru' => 'Araç kurtarma için ne kadar sürede yetişiyorsunuz?', 'cevap' => 'Konum ve yoğunluğa bağlı olarak mümkün olan en kısa sürede yanınıza ulaşmaya çalışıyoruz. Hızlı müdahale için öncelikli olarak telefon ile ulaşmanızı öneririz.'],
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa',    'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Oto Kurtarma', 'url' => SITE_URL . '/hizmetler/oto-kurtarma'],
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, #7f1d1d 0%, #991b1b 50%, #b91c1c 100%);">
    <div class="container">
        <div class="page-hero-content">
            <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(239,68,68,.2); border:1px solid rgba(239,68,68,.4); color:#fca5a5; padding:4px 12px; border-radius:999px; font-size:14px; font-weight:700; margin-bottom:16px; text-transform:uppercase; letter-spacing:.05em;">
                🚨 7/24 Acil Hizmet
            </div>
            <h1>Balıkesir Oto Kurtarma ve Çekici Hizmeti</h1>
            <p>Yolda kaldınız mı? Araç kazası mı yaşadınız? Balıkesir genelinde 7/24 oto kurtarma ve çekici hizmetimizle hemen yanınızdayız.</p>

            <!-- Acil Tel -->
            <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-xl" style="margin-top:var(--spacing-6); display:inline-flex;" id="oto-emergency-tel">
                🚨 ACİL — Hemen Ara: <?= FIRMA_TELEFON ?>
            </a>
        </div>
    </div>
</section>

<!-- İçerik -->
<section class="section" aria-labelledby="oto-kurtarma-baslik">
    <div class="container">
        <div style="max-width: 900px; margin-inline: auto; display:flex; flex-direction:column; gap:var(--spacing-10);">

            <div>
                <h2 id="oto-kurtarma-baslik" class="section-title" style="text-align:left;">Balıkesir Oto Kurtarma Hizmeti</h2>
                <div style="color: var(--color-gray-600); line-height:1.8; font-size:var(--fs-lg); display:flex; flex-direction:column; gap:var(--spacing-4);">
                    <p>Tekinler Grup Vinç olarak Balıkesir ve çevresinde 7/24 <a href="/hizmetler/oto-kurtarma" style="color:var(--color-accent);font-weight:600;">oto kurtarma ve çekici hizmeti</a> sunmaktayız. Araç kazası, arıza, yolda kalma veya araç terk durumlarında hızla sahaya çıkıyoruz.</p>
                    <p>Deneyimli ekibimiz ve uygun ekipmanlarımızla aracınızı güvenli şekilde kurtarıp istediğiniz noktaya ulaştırıyoruz.</p>
                </div>
            </div>

            <!-- Hizmet Kapsamı -->
            <div>
                <h3 style="font-size:var(--fs-2xl); color:var(--color-primary); margin-bottom:var(--spacing-6);">Oto Kurtarma Hizmet Kapsamımız</h3>
                <div class="grid-2">
                    <?php
                    $services_oto = [
                        '🚗 Arıza nedeniyle yolda kalan araçların çekilmesi',
                        '🚨 Kaza yapan araçların kurtarılması',
                        '🏔️ Şarampole düşen araçların kurtarılması',
                        '🌊 Çamur veya karda sıkışan araçların kurtarılması',
                        '🔑 Kapısı kilitlenen veya yakıt biten araçlar',
                        '🏠 Araç depo / park taşıma operasyonları',
                    ];
                    foreach ($services_oto as $s): ?>
                    <div style="display:flex; align-items:flex-start; gap:var(--spacing-3); padding:var(--spacing-4); background:var(--color-gray-50); border-radius:var(--radius-md); border:1px solid var(--color-gray-200);">
                        <span style="font-size:var(--fs-base);"><?= $s ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Acil CTA -->
            <div style="background: #7f1d1d; border-radius:var(--radius-xl); padding:var(--spacing-8); text-align:center; color:white;">
                <div style="font-size:3rem; margin-bottom:var(--spacing-4);">🚨</div>
                <h3 style="color:white; font-size:var(--fs-2xl); margin-bottom:var(--spacing-3);">Acil Oto Kurtarma?</h3>
                <p style="opacity:.85; margin-bottom:var(--spacing-6);">Beklemeden arayın. Balıkesir genelinde hızla yanınıza geliyoruz.</p>
                <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-xl" id="oto-cta-tel"><?= FIRMA_TELEFON ?></a>
                    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Acil%20oto%20kurtarma%20hizmetine%20ihtiyacım%20var." class="btn btn-whatsapp btn-xl" id="oto-cta-wa" target="_blank" rel="noopener">WhatsApp</a>
                </div>
            </div>

            <!-- SSS -->
            <div>
                <h3 style="font-size:var(--fs-2xl); color:var(--color-primary); margin-bottom:var(--spacing-6);">Sık Sorulan Sorular</h3>
                <div class="faq-list">
                    <?php foreach ($faq_items as $i => $faq): ?>
                    <div class="faq-item">
                        <button class="faq-question" id="ofaq-q-<?= $i ?>" aria-expanded="false">
                            <div class="faq-q-left">
                                <span class="faq-q-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <span class="faq-q-text"><?= htmlspecialchars($faq['soru']) ?></span>
                            </div>
                            <span class="faq-icon-wrap" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </span>
                        </button>
                        <div class="faq-answer" id="ofaq-a-<?= $i ?>">
                            <div class="faq-answer-inner">
                                <p><?= htmlspecialchars($faq['cevap']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <script type="application/ld+json"><?= schema_faq($faq_items) ?></script>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
