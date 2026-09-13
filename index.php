<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'Balıkesir Vinç | Vinç Kiralama ve Oto Kurtarma | Tekinler Grup Vinç',
    'description' => 'Tekinler Grup Vinç; Balıkesir ve çevresinde vinç kiralama, kaldırma-taşıma ve oto kurtarma hizmetleri sunar. Profesyonel ekip ve hızlı hizmet için iletişime geçin.',
    'canonical'   => SITE_URL . '/',
    'og_type'     => 'website',
    'schema'      => [
        schema_local_business(),
        schema_website(),
    ],
];

$faq_items = [
    ['soru' => 'Vinç kiralama fiyatı nasıl belirlenir?', 'cevap' => 'Vinç kiralama ücreti; vinç tipi, kaldırma kapasitesi, çalışma süresi, lokasyon ve işin niteliğine göre değişmektedir. Net bir fiyat verebilmemiz için proje detaylarınızı bizimle paylaşmanız yeterlidir.'],
    ['soru' => 'Balıkesir\'in hangi ilçelerine hizmet veriyorsunuz?', 'cevap' => 'Balıkesir merkez (Altıeylül, Karesi) başta olmak üzere Edremit, Bandırma, Gönen, Ayvalık, Burhaniye, Erdek, Susurluk ve birçok ilçede hizmet vermekteyiz. Detaylı hizmet bölgeleri için bizi arayabilirsiniz.'],
    ['soru' => 'Oto kurtarma hizmetiniz 7/24 mı?', 'cevap' => 'Evet, oto kurtarma ve çekici hizmetimiz 7 gün 24 saat kesintisiz olarak sunulmaktadır. Acil durumlarda hemen ulaşabilirsiniz.'],
    ['soru' => 'Vinç hizmetinde operatör de geliyor mu?', 'cevap' => 'Tüm vinç kiralama hizmetlerimiz, eğitimli ve deneyimli operatörlerimizle birlikte sunulmaktadır. Güvenli çalışma bizim için önceliktir.'],
    ['soru' => 'Hangi tonajlarda vinç hizmeti veriyorsunuz?', 'cevap' => 'Farklı tonaj kapasitelerinde mobil vinç, sepetli vinç ve ağır yük kaldırma çözümlerimiz mevcuttur. Projenizin gerektirdiği kapasiteye göre en uygun ekipmanı belirliyoruz.'],
];

$breadcrumbs = []; // Ana sayfa için breadcrumb yok

include __DIR__ . '/includes/header.php';
?>

<!-- ====== HERO ====== -->
<section class="hero" aria-label="Ana Sayfa Hero">
    <div class="hero-bg" role="img" aria-label="Balıkesir vinç kiralama hizmetinde kullanılan profesyonel vinç"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-fade-up">
            <div class="hero-badge">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                Balıkesir'in Güvenilir Vinç Firması
            </div>

            <h1>
                Balıkesir Vinç ve<br>
                <span class="accent">Profesyonel Vinç Kiralama</span><br>
                Hizmetleri
            </h1>

            <p class="hero-desc">
                Tekinler Grup Vinç olarak Balıkesir ve çevresinde profesyonel vinç kiralama,
                kaldırma-taşıma ve oto kurtarma çözümleri sunuyoruz.
                Deneyimli ekibimiz ve modern ekipmanlarımızla yanınızdayız.
            </p>

            <div class="hero-cta">
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary btn-xl" id="hero-tel-btn">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                    Hemen Ara
                </a>
                <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20hizmeti%20hakkında%20bilgi%20almak%20istiyorum." class="btn btn-whatsapp btn-xl" id="hero-wa-btn" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    WhatsApp
                </a>
                <a href="/iletisim" class="btn btn-outline btn-xl" id="hero-quote-btn">
                    Teklif Al
                </a>
            </div>

            <div class="hero-stats">
                <div class="hero-stat-item">
                    <span class="hero-stat-number">7/24</span>
                    <span class="hero-stat-label">Oto Kurtarma</span>
                </div>
                <div class="hero-stat-item">
                    <span class="hero-stat-number">6</span>
                    <span class="hero-stat-label">Farklı Hizmet</span>
                </div>
                <div class="hero-stat-item">
                    <span class="hero-stat-number">15+</span>
                    <span class="hero-stat-label">Hizmet İlçesi</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== HİZMETLER ====== -->
<section class="section services-section" id="hizmetler" aria-labelledby="hizmetler-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Hizmetlerimiz</span>
            <h2 class="section-title" id="hizmetler-baslik">Balıkesir'de Profesyonel Vinç Hizmetleri</h2>
            <p class="section-desc">
                Her ölçekte kaldırma, taşıma ve kurtarma operasyonu için deneyimli ekibimiz
                ve modern ekipmanlarımızla yanınızdayız.
            </p>
        </div>

        <div class="grid-3" style="gap: var(--spacing-6);">
            <?php foreach ($hizmetler as $hizmet): ?>
            <article class="service-card" style="--card-accent: <?= $hizmet['renk'] ?>;">
                <div class="service-card-icon" aria-hidden="true">
                    <?= render_icon($hizmet['ikon'], '', 36) ?>
                </div>
                <h3><?= htmlspecialchars($hizmet['baslik']) ?></h3>
                <p><?= htmlspecialchars($hizmet['ozet']) ?></p>
                <a href="<?= $hizmet['url'] ?>" class="service-card-link" aria-label="<?= htmlspecialchars($hizmet['baslik']) ?> hakkında detaylı bilgi">
                    Detaylı Bilgi
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8">
            <a href="/hizmetlerimiz" class="btn btn-secondary btn-lg">Tüm Hizmetleri Gör</a>
        </div>
    </div>
</section>

<!-- ====== NEDEN TEKİNLER GRUP ====== -->
<section class="section why-us" id="neden-biz" aria-labelledby="neden-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label" style="color: var(--color-accent);">Neden Biz?</span>
            <h2 class="section-title" id="neden-baslik" style="color: var(--color-white);">Neden Tekinler Grup Vinç?</h2>
            <p class="section-desc" style="color: rgba(255,255,255,.7);">
                Balıkesir'de güvenilir vinç hizmeti arayanların tercihi olmak için
                her projede aynı özeni ve profesyonelliği gösteriyoruz.
            </p>
        </div>

        <div class="why-grid">
            <article class="why-card">
                <span class="why-card-icon" aria-hidden="true"><?= render_icon('shield', '', 32) ?></span>
                <h3>Güvenli Çalışma</h3>
                <p>İş güvenliği standartlarına tam uyum, sertifikalı operatörler ve düzenli bakımlı ekipmanlarla güvenli çalışma ortamı sağlıyoruz.</p>
            </article>
            <article class="why-card">
                <span class="why-card-icon" aria-hidden="true"><?= render_icon('flash', '', 32) ?></span>
                <h3>Hızlı Hizmet</h3>
                <p>Acil vinç ve oto kurtarma taleplerine hızla yanıt veriyoruz. Balıkesir ve çevresindeki projelerde minimum bekleme süresi hedefliyoruz.</p>
            </article>
            <article class="why-card">
                <span class="why-card-icon" aria-hidden="true"><?= render_icon('worker', '', 32) ?></span>
                <h3>Deneyimli Ekip</h3>
                <p>Alanında uzman, deneyimli operatör ve teknik ekibimizle her büyüklükteki projeyi başarıyla tamamlıyoruz.</p>
            </article>
            <article class="why-card">
                <span class="why-card-icon" aria-hidden="true"><?= render_icon('crane', '', 32) ?></span>
                <h3>Modern Ekipman</h3>
                <p>Farklı kapasitelerde mobil vinç, sepetli vinç ve ağır yük kaldırma filomuzla her türlü kaldırma-taşıma operasyonuna hazırız.</p>
            </article>
            <article class="why-card">
                <span class="why-card-icon" aria-hidden="true"><?= render_icon('pin', '', 32) ?></span>
                <h3>Yerel Bilgi</h3>
                <p>Balıkesir ve tüm ilçelerini iyi tanıyan ekibimiz, sahaya hızla ulaşarak işi zamanında tamamlıyor.</p>
            </article>
            <article class="why-card">
                <span class="why-card-icon" aria-hidden="true"><?= render_icon('handshake', '', 32) ?></span>
                <h3>Proje Bazlı Çözüm</h3>
                <p>Her projenin kendine has gereksinimleri olduğunu bilerek, size özel çözümler üretiyoruz. Küçük işlerden büyük projelere kadar.</p>
            </article>
        </div>
    </div>
</section>

<!-- ====== HİZMET BÖLGELERİ ====== -->
<section class="section regions-section" id="hizmet-bolgeleri" aria-labelledby="bolgeler-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Hizmet Kapsamı</span>
            <h2 class="section-title" id="bolgeler-baslik">Balıkesir Genelinde Hizmet</h2>
            <p class="section-desc">
                Balıkesir merkez ve hizmet verdiğimiz tüm ilçelerde
                profesyonel vinç ve oto kurtarma hizmeti sunuyoruz.
            </p>
        </div>

        <div class="regions-grid">
            <div class="region-tag main">Balıkesir Merkez</div>
            <?php foreach ($hizmet_ilceleri as $ilce): ?>
            <div class="region-tag"><?= htmlspecialchars($ilce) ?></div>
            <?php endforeach; ?>
        </div>

        <p class="text-center text-muted mt-8" style="font-size: var(--fs-sm);">
            Hizmet bölgelerimiz hakkında detaylı bilgi için
            <a href="/iletisim" style="color: var(--color-accent); font-weight: 600;">bize ulaşın</a>.
        </p>
    </div>
</section>

<!-- ====== REFERANSLAR ====== -->
<section class="section" style="background: var(--color-gray-50);" id="referanslar-ozet" aria-labelledby="ref-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Projelerimiz</span>
            <h2 class="section-title" id="ref-baslik">Tamamladığımız Projeler</h2>
            <p class="section-desc">
                Balıkesir ve çevresinde gerçekleştirdiğimiz projeler hakkında bilgi almak için referanslar sayfamızı inceleyebilirsiniz.
            </p>
        </div>

        <div class="grid-3" style="gap: var(--spacing-6);">
            <article class="card stat-card">
                <span class="stat-number">✓</span>
                <p class="stat-label" style="font-size: var(--fs-base); color: var(--color-gray-700); font-weight: 600; margin-top: var(--spacing-3);">İnşaat Vinç Projeleri</p>
                <p style="font-size: var(--fs-sm); color: var(--color-gray-500); margin-top: var(--spacing-2);">Balıkesir'de çeşitli inşaat projelerinde vinç hizmeti</p>
            </article>
            <article class="card stat-card">
                <span class="stat-number">✓</span>
                <p class="stat-label" style="font-size: var(--fs-base); color: var(--color-gray-700); font-weight: 600; margin-top: var(--spacing-3);">Endüstriyel Kaldırma</p>
                <p style="font-size: var(--fs-sm); color: var(--color-gray-500); margin-top: var(--spacing-2);">Fabrika ve tesis kurulum operasyonları</p>
            </article>
            <article class="card stat-card">
                <span class="stat-number">✓</span>
                <p class="stat-label" style="font-size: var(--fs-base); color: var(--color-gray-700); font-weight: 600; margin-top: var(--spacing-3);">Oto Kurtarma</p>
                <p style="font-size: var(--fs-sm); color: var(--color-gray-500); margin-top: var(--spacing-2);">Balıkesir genelinde 7/24 oto kurtarma hizmetleri</p>
            </article>
        </div>

        <div class="text-center mt-8">
            <a href="/referanslar" class="btn btn-outline-dark btn-lg">Tüm Referansları Gör</a>
        </div>
    </div>
</section>

<!-- ====== SSS (SIKÇA SORULAN SORULAR) ====== -->
<section class="section faq-section" id="sss" aria-labelledby="sss-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Yardım & Çözüm Merkezi</span>
            <h2 class="section-title" id="sss-baslik">Sık Sorulan Sorular ve Yanıtları</h2>
            <p class="section-desc">Vinç kiralama süreçleri, operatör standartları ve iş güvenliği prosedürlerimiz hakkında en çok merak edilen konular.</p>
        </div>

        <div class="faq-layout">
            <!-- Sol: Akordiyon Soru Listesi -->
            <div class="faq-list" role="list">
                <?php foreach ($faq_items as $i => $faq): ?>
                <div class="faq-item" role="listitem">
                    <button class="faq-question" id="faq-q-<?= $i ?>" aria-expanded="false" aria-controls="faq-a-<?= $i ?>">
                        <div class="faq-q-left">
                            <span class="faq-q-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                            <span class="faq-q-text"><?= htmlspecialchars($faq['soru']) ?></span>
                        </div>
                        <span class="faq-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div class="faq-answer" id="faq-a-<?= $i ?>" role="region" aria-labelledby="faq-q-<?= $i ?>">
                        <div class="faq-answer-inner">
                            <p><?= htmlspecialchars($faq['cevap']) ?></p>
                            <div class="faq-highlight-note">
                                <span><?= render_icon('lightbulb', '', 18) ?></span>
                                <span>Detaylı bilgi ve sahanıza özel ücretsiz ön keşif için uzman teknik ekibimizle 7/24 irtibata geçebilirsiniz.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Sağ: Hızlı Yardım & Destek Kartı -->
            <aside class="faq-help-card">
                <span class="faq-help-icon" aria-hidden="true"><?= render_icon('chat', '', 36) ?></span>
                <span class="faq-help-badge"><?= render_icon('flash', '', 14) ?> Hızlı Yanıt: 15 Dk</span>
                <h3>Farklı Bir Sorunuz mu Var?</h3>
                <p>Projenizin tonajı, bom yüksekliği veya çalışma saati konusunda kararsızsanız uzman operatörlerimiz size en doğru vinci önermeye hazır.</p>
                
                <div class="faq-help-btns">
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-secondary btn-lg" style="justify-content:center;text-align:center;">
                        <?= render_icon('phone', '', 18) ?> <?= FIRMA_TELEFON ?>
                    </a>
                    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20kiralama%20hakkında%20sorum%20var." target="_blank" rel="noopener" class="btn btn-whatsapp" style="justify-content:center;text-align:center;">
                        <?= render_icon('whatsapp', '', 18) ?> WhatsApp ile Sorun
                    </a>
                </div>
            </aside>
        </div>

        <!-- FAQ Schema -->
        <script type="application/ld+json"><?= schema_faq($faq_items) ?></script>
    </div>
</section>

<!-- ====== SON CTA ====== -->
<section class="cta-banner" id="son-cta" aria-label="İletişim Çağrısı">
    <div class="container">
        <div class="cta-banner-content">
            <h2>Vinç veya Oto Kurtarma Hizmetine mi İhtiyacınız Var?</h2>
            <p>Projeniz küçük veya büyük olsun, hızla yanınızdayız. Ücretsiz teklif için hemen iletişime geçin.</p>
            <div class="cta-banner-btns">
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-secondary btn-xl" id="cta-tel-btn">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                    <?= FIRMA_TELEFON ?>
                </a>
                <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20talebi%20oluşturmak%20istiyorum." class="btn btn-whatsapp btn-xl" id="cta-wa-btn" target="_blank" rel="noopener">
                    WhatsApp ile Yazın
                </a>
                <a href="/iletisim" class="btn btn-outline-dark btn-xl" id="cta-form-btn">
                    Teklif Formu
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
