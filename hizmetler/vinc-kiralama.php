<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$page_meta = [
    'title'       => 'Balıkesir Vinç Kiralama | Profesyonel Vinç Hizmeti | Tekinler Grup',
    'description' => 'Balıkesir\'de profesyonel vinç kiralama hizmeti. Operatörlü mobil vinç, sepetli vinç ve ağır yük kaldırma sistemleri. Uygun fiyat ve hızlı hizmet için hemen arayın.',
    'canonical'   => SITE_URL . '/hizmetler/vinc-kiralama',
    'schema'      => [
        schema_service('Vinç Kiralama Balıkesir', 'Balıkesir ve çevresinde profesyonel vinç kiralama hizmeti. Operatörlü ve tam donanımlı vinçlerle her türlü kaldırma operasyonu.', '/hizmetler/vinc-kiralama'),
    ],
];

$faq_items = [
    ['soru' => 'Vinç kiralama fiyatı nasıl belirlenir?', 'cevap' => 'Vinç kiralama ücreti; vinç tipi, kaldırma kapasitesi, çalışma süresi, lokasyon ve işin niteliğine göre değişmektedir. Net fiyat için proje detaylarınızı paylaşmanız yeterlidir.'],
    ['soru' => 'Vinç kiralama hizmetinde operatör bulunuyor mu?', 'cevap' => 'Evet, tüm vinç kiralama hizmetlerimiz deneyimli ve sertifikalı operatörlerimizle birlikte sunulmaktadır.'],
    ['soru' => 'Minimum kaç saatlik kiralama yapılıyor?', 'cevap' => 'Kiralama koşulları projeye göre belirlenmektedir. Detaylı bilgi için bizi arayın.'],
    ['soru' => 'Balıkesir\'in hangi ilçelerine vinç kiralama hizmeti veriyorsunuz?', 'cevap' => 'Balıkesir merkez başta olmak üzere Edremit, Bandırma, Gönen, Ayvalık ve diğer birçok ilçede hizmet veriyoruz.'],
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa',    'url' => SITE_URL . '/'],
    ['name' => 'Hizmetlerimiz','url' => SITE_URL . '/hizmetlerimiz'],
    ['name' => 'Vinç Kiralama','url' => SITE_URL . '/hizmetler/vinc-kiralama'],
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Balıkesir Vinç Kiralama Hizmeti</h1>
            <p>Profesyonel ekip ve modern ekipmanlarımızla Balıkesir genelinde güvenilir vinç kiralama hizmeti sunuyoruz.</p>
        </div>
    </div>
</section>

<!-- İçerik -->
<section class="section" aria-labelledby="vinc-kiralama-baslik">
    <div class="container">
        <div style="display: grid; gap: var(--spacing-10); max-width: 900px; margin-inline: auto;">

            <div>
                <h2 id="vinc-kiralama-baslik" class="section-title" style="text-align:left;">Balıkesir Vinç Kiralama</h2>
                <div style="color: var(--color-gray-600); line-height: 1.8; font-size: var(--fs-lg); display:flex; flex-direction:column; gap: var(--spacing-4);">
                    <p>Tekinler Grup Vinç olarak Balıkesir ve çevre ilçelerde operatörlü <a href="/hizmetler/vinc-kiralama" style="color:var(--color-accent);font-weight:600;">vinç kiralama hizmeti</a> sunuyoruz. İnşaat, endüstriyel kurulum, tadilat ve taşıma gibi farklı ihtiyaçlara yönelik doğru ekipmanı ve deneyimli operatörü sahaya getiriyoruz.</p>
                    <p>Vinç kiralarken güvenlik ve profesyonellik en önemli unsurlar arasındadır. Tüm ekipmanlarımız düzenli olarak bakıma alınmakta, operatörlerimiz iş güvenliği eğitimlerine sahip bulunmaktadır.</p>
                </div>
            </div>

            <!-- Kullanım Alanları -->
            <div>
                <h3 style="font-size: var(--fs-2xl); color: var(--color-primary); margin-bottom: var(--spacing-6);">Hangi Durumlarda Vinç Kiralama Gerekli?</h3>
                <div class="grid-2">
                    <?php
                    $usecases = [
                        'İnşaat projeleri ve yüksek katlı yapılarda malzeme taşıma',
                        'Fabrika ve tesis kurulum / söküm operasyonları',
                        'Elektrik direklerinin yerleştirilmesi',
                        'Ağır ekipman ve makine taşıma işlemleri',
                        'Prefabrik yapı montajı',
                        'Liman ve iskele operasyonları',
                        'Endüstriyel bakım ve onarım çalışmaları',
                        'Depo ve lojistik yükleme-boşaltma işlemleri',
                    ];
                    foreach ($usecases as $uc): ?>
                    <div style="display:flex; align-items:center; gap:var(--spacing-3); padding:var(--spacing-3) var(--spacing-4); background:var(--color-gray-50); border-radius:var(--radius-md);">
                        <span style="color:var(--color-accent); flex-shrink:0; display:flex;"><?= render_icon('shield', '', 18) ?></span>
                        <span style="font-size:var(--fs-sm); font-weight:500; color:var(--color-gray-700);"><?= $uc ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- İş Güvenliği -->
            <div style="background:var(--color-primary); color:white; padding:var(--spacing-8); border-radius:var(--radius-xl);">
                <div style="display:flex; align-items:center; gap:var(--spacing-3); margin-bottom:var(--spacing-4);">
                    <span style="color:var(--color-accent);"><?= render_icon('shield', '', 28) ?></span>
                    <h3 style="color:white; font-size:var(--fs-2xl); margin:0;">İş Güvenliği Standartları</h3>
                </div>
                <p style="opacity:.85; line-height:1.8;">Tüm vinç operasyonlarımızda iş güvenliği ön planda tutulmaktadır. Operatörlerimiz zorunlu eğitim ve sertifikalara sahiptir. Ekipmanlarımız periyodik bakım ve kontrol süreçlerinden geçmektedir. Çalışma öncesinde saha değerlendirmesi yapılmaktadır.</p>
            </div>

            <!-- CTA -->
            <div style="background: var(--color-gray-50); padding: var(--spacing-8); border-radius: var(--radius-xl); text-align:center; border: 2px dashed var(--color-accent);">
                <h3 style="font-size:var(--fs-2xl); margin-bottom:var(--spacing-4);">Balıkesir Vinç Kiralama Teklifi Alın</h3>
                <p style="color:var(--color-gray-600); margin-bottom:var(--spacing-6);">Projenizin detaylarını paylaşın, size en uygun çözümü sunarız.</p>
                <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:var(--spacing-3);">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-lg" id="vinc-tel-btn"><?= FIRMA_TELEFON ?></a>
                    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20kiralama%20hakkında%20bilgi%20almak%20istiyorum." class="btn btn-whatsapp btn-lg" id="vinc-wa-btn" target="_blank" rel="noopener">WhatsApp</a>
                    <a href="/iletisim" class="btn btn-outline-dark btn-lg">Teklif Formu</a>
                </div>
            </div>

            <!-- SSS -->
            <div>
                <h3 style="font-size:var(--fs-2xl); color:var(--color-primary); margin-bottom:var(--spacing-6);">Sık Sorulan Sorular</h3>
                <div class="faq-list">
                    <?php foreach ($faq_items as $i => $faq): ?>
                    <div class="faq-item">
                        <button class="faq-question" id="vfaq-q-<?= $i ?>" aria-expanded="false">
                            <div class="faq-q-left">
                                <span class="faq-q-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <span class="faq-q-text"><?= htmlspecialchars($faq['soru']) ?></span>
                            </div>
                            <span class="faq-icon-wrap" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </span>
                        </button>
                        <div class="faq-answer" id="vfaq-a-<?= $i ?>">
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

<!-- Diğer Hizmetler -->
<section class="section services-section" aria-labelledby="diger-hizmetler">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Diğer Hizmetlerimiz</span>
            <h2 class="section-title" id="diger-hizmetler">İlgili Hizmetleri İnceleyin</h2>
        </div>
        <div class="grid-3">
            <a href="/hizmetler/mobil-vinc" class="service-card" style="--card-accent:#3b82f6; text-decoration:none;">
                <div class="service-card-icon"><?= render_icon('mobile-crane', '', 28) ?></div>
                <h3>Balıkesir Mobil Vinç</h3>
                <p>Sahaya hızla ulaşan <strong>mobil vinç</strong> hizmetimizle her türlü operasyonu gerçekleştiriyoruz.</p>
                <span class="service-card-link">Detaylı Bilgi →</span>
            </a>
            <a href="/hizmetler/sepetli-vinc" class="service-card" style="--card-accent:#10b981; text-decoration:none;">
                <div class="service-card-icon"><?= render_icon('basket-crane', '', 28) ?></div>
                <h3>Balıkesir Sepetli Vinç</h3>
                <p>Yüksekte çalışma gerektiren işlerde güvenli <strong>sepetli vinç</strong> hizmeti.</p>
                <span class="service-card-link">Detaylı Bilgi →</span>
            </a>
            <a href="/hizmetler/agir-yuk-kaldirma" class="service-card" style="--card-accent:#ef4444; text-decoration:none;">
                <div class="service-card-icon"><?= render_icon('heavy-lift', '', 28) ?></div>
                <h3>Ağır Yük Kaldırma</h3>
                <p>Endüstriyel ekipman ve ağır yük kaldırma operasyonları için uzman ekip.</p>
                <span class="service-card-link">Detaylı Bilgi →</span>
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
