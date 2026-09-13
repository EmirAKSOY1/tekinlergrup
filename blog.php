<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'Blog & Vinç Rehberi | Tekinler Grup Vinç Balıkesir',
    'description' => 'Vinç kiralama fiyatları, mobil vinç kullanımı, sepetli vinç avantajları ve iş güvenliği konularında uzman rehber yazılarımız.',
    'canonical'   => SITE_URL . '/blog',
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa', 'url' => SITE_URL . '/'],
    ['name' => 'Blog',      'url' => SITE_URL . '/blog'],
];

$blog_posts = [
    [
        'baslik'    => 'Vinç Kiralama Fiyatları Nasıl Belirlenir?',
        'slug'      => 'vinc-kiralama-fiyatlari',
        'tarih'     => '2026-08-15',
        'tarih_fmt' => '15 Ağustos 2026',
        'kategori'  => 'Rehber',
        'filtre'    => 'rehber',
        'ozet'      => 'Vinç kiralama fiyatını etkileyen faktörler nelerdir? Tonaj kapasitesinden çalışma saatine, lokasyondan operatör gereksinimine kadar tüm maliyet kalemlerini ele alıyoruz.',
        'okuma'     => '5 dk',
        'ikon'      => '💰',
        'featured'  => true,
    ],
    [
        'baslik'    => 'Mobil Vinç Nedir? Ne Zaman Tercih Edilmeli?',
        'slug'      => 'mobil-vinc-nedir',
        'tarih'     => '2026-07-20',
        'tarih_fmt' => '20 Temmuz 2026',
        'kategori'  => 'Bilgi',
        'filtre'    => 'bilgi',
        'ozet'      => 'Mobil vinç ile sabit sistemler arasındaki temel farklar, mobil vincin sahadaki hareket kabiliyeti ve hangi projelerde vazgeçilmez olduğu hakkında kapsamlı analiz.',
        'okuma'     => '4 dk',
        'ikon'      => '🚛',
    ],
    [
        'baslik'    => 'Sepetli Vinç Hangi İşlerde Kullanılır?',
        'slug'      => 'sepetli-vinc-kullanim-alanlari',
        'tarih'     => '2026-07-05',
        'tarih_fmt' => '5 Temmuz 2026',
        'kategori'  => 'Rehber',
        'filtre'    => 'rehber',
        'ozet'      => 'Yüksekte çalışma platformu sunan sepetli vinçlerin cephe montajı, elektrik hatları, çatı onarımı ve endüstriyel tesis temizliğindeki kritik rolü.',
        'okuma'     => '4 dk',
        'ikon'      => '🧺',
    ],
    [
        'baslik'    => 'Vinç ile Yük Kaldırmada İş Güvenliği',
        'slug'      => 'vinc-is-guvenligi',
        'tarih'     => '2026-06-18',
        'tarih_fmt' => '18 Haziran 2026',
        'kategori'  => 'Güvenlik',
        'filtre'    => 'guvenlik',
        'ozet'      => 'Ağır kaldırma operasyonlarında sıfır iş kazası hedefi: Zemin analizi, rüzgar limiti, sapan bağlama teknikleri ve operatör emniyet standartları.',
        'okuma'     => '6 dk',
        'ikon'      => '🛡️',
    ],
    [
        'baslik'    => 'Oto Kurtarma Hizmeti Hangi Durumlarda Çağrılır?',
        'slug'      => 'oto-kurtarma-ne-zaman',
        'tarih'     => '2026-06-01',
        'tarih_fmt' => '1 Haziran 2026',
        'kategori'  => 'Rehber',
        'filtre'    => 'rehber',
        'ozet'      => 'Trafik kazası, şarampol kayması veya mekanik arıza durumlarında doğru oto kurtarma ve çekici desteğini alırken nelere dikkat edilmeli?',
        'okuma'     => '4 dk',
        'ikon'      => '🚨',
    ],
    [
        'baslik'    => 'Balıkesir\'de Vinç Kiralarken Dikkat Edilmesi Gerekenler',
        'slug'      => 'balikesir-vinc-kiralama-dikkat',
        'tarih'     => '2026-05-10',
        'tarih_fmt' => '10 Mayıs 2026',
        'kategori'  => 'Yerel',
        'filtre'    => 'yerel',
        'ozet'      => 'Balıkesir, Soma, Akhisar ve Edremit bölgelerinde vinç firması seçerken periyodik muayene, operatör sertifikası ve şeffaf fiyatlandırmanın önemi.',
        'okuma'     => '5 dk',
        'ikon'      => '📍',
    ],
];

// Öne çıkan yazıyı ve diğerlerini ayır
$featured_post = $blog_posts[0];
$regular_posts = array_slice($blog_posts, 1);

include __DIR__ . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(245,158,11,.2);color:var(--color-accent);border:1px solid rgba(245,158,11,.4);padding:4px 14px;border-radius:999px;font-size:var(--fs-xs);font-weight:700;display:inline-block;margin-bottom:1rem;">BİLGİ & REHBER</span>
            <h1>Vinç ve Kaldırma Operasyonları Blogu</h1>
            <p>Vinç kiralama, mobil & sepetli sistemler, iş güvenliği yönetmelikleri ve Balıkesir bölgesel operasyonları hakkında güncel bilgiler.</p>
        </div>
    </div>
</section>

<!-- Blog Bölümü -->
<section class="section" aria-labelledby="blog-baslik">
    <div class="container">

        <!-- Öne Çıkan Yazı Kartı -->
        <article class="blog-featured-card" itemscope itemtype="https://schema.org/BlogPosting">
            <div class="blog-featured-visual">
                <span class="blog-featured-tag">Öne Çıkan Rehber</span>
                <span class="blog-featured-visual-icon" aria-hidden="true"><?= $featured_post['ikon'] ?></span>
                <span style="font-size:var(--fs-sm);opacity:.85;font-weight:600;">Tekinler Grup Vinç Uzmanlığı</span>
            </div>
            <div class="blog-featured-content">
                <div class="blog-featured-meta">
                    <span>📁 <?= htmlspecialchars($featured_post['kategori']) ?></span>
                    <span>•</span>
                    <time datetime="<?= $featured_post['tarih'] ?>" itemprop="datePublished">📅 <?= $featured_post['tarih_fmt'] ?></time>
                    <span>•</span>
                    <span>⏱️ <?= $featured_post['okuma'] ?> okuma</span>
                </div>
                <h2 class="blog-featured-title" itemprop="headline">
                    <a href="/blog/<?= $featured_post['slug'] ?>"><?= htmlspecialchars($featured_post['baslik']) ?></a>
                </h2>
                <p class="blog-featured-desc" itemprop="description">
                    <?= htmlspecialchars($featured_post['ozet']) ?>
                </p>
                <div>
                    <a href="/blog/<?= $featured_post['slug'] ?>" class="btn btn-primary">
                        Yazıyı Oku
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="margin-left:6px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </article>

        <!-- Filtre Çubuğu -->
        <div class="blog-filter-bar" id="blog-filters">
            <button type="button" class="blog-filter-pill active" data-filter="all">Tüm Yazılar (<?= count($blog_posts) ?>)</button>
            <button type="button" class="blog-filter-pill" data-filter="rehber">Rehberler</button>
            <button type="button" class="blog-filter-pill" data-filter="bilgi">Teknik Bilgi</button>
            <button type="button" class="blog-filter-pill" data-filter="guvenlik">İş Güvenliği</button>
            <button type="button" class="blog-filter-pill" data-filter="yerel">Yerel İpuçları</button>
        </div>

        <!-- Blog Kartları Grid -->
        <div class="blog-grid" id="blog-grid">
            <?php foreach ($regular_posts as $post): ?>
            <article class="blog-card" data-category="<?= $post['filtre'] ?>" itemscope itemtype="https://schema.org/BlogPosting">
                <a href="/blog/<?= $post['slug'] ?>" class="blog-card-thumb-link" style="text-decoration:none;" aria-label="<?= htmlspecialchars($post['baslik']) ?>">
                    <div class="blog-card-thumb">
                        <span class="blog-card-category-badge"><?= htmlspecialchars($post['kategori']) ?></span>
                        <span class="blog-card-thumb-icon" aria-hidden="true"><?= $post['ikon'] ?></span>
                    </div>
                </a>
                <div class="blog-card-body">
                    <div class="blog-card-meta">
                        <span class="blog-card-meta-item">
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <time datetime="<?= $post['tarih'] ?>" itemprop="datePublished"><?= $post['tarih_fmt'] ?></time>
                        </span>
                        <span>•</span>
                        <span class="blog-card-meta-item">
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <?= $post['okuma'] ?>
                        </span>
                    </div>
                    <h3 class="blog-card-title" itemprop="headline">
                        <a href="/blog/<?= $post['slug'] ?>"><?= htmlspecialchars($post['baslik']) ?></a>
                    </h3>
                    <p class="blog-card-desc" itemprop="description">
                        <?= htmlspecialchars($post['ozet']) ?>
                    </p>
                    <div class="blog-card-footer">
                        <div class="blog-card-author">
                            <div class="blog-author-dot">TG</div>
                            <span>Tekinler Ekip</span>
                        </div>
                        <a href="/blog/<?= $post['slug'] ?>" class="blog-read-more-link" aria-label="<?= htmlspecialchars($post['baslik']) ?> yazısını oku">
                            Devamını Oku
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Danışmanlık & Teklif CTA Banner -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-banner-content">
            <h2>Özel Projeniz İçin Vinç Seçiminde Kararsız mısınız?</h2>
            <p>Hangi vincin işinize en uygun olduğunu belirlemek için uzman operatörlerimiz ücretsiz saha keşfi gerçekleştirsin.</p>
            <div class="cta-banner-btns">
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-secondary btn-xl" id="blog-tel-btn"><?= FIRMA_TELEFON ?></a>
                <a href="/iletisim" class="btn btn-outline-dark btn-xl">Hızlı Teklif İsteyin</a>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Filtreleme Scripti -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const pills = document.querySelectorAll('.blog-filter-pill');
    const cards = document.querySelectorAll('.blog-card');

    pills.forEach(pill => {
        pill.addEventListener('click', function() {
            pills.forEach(p => p.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                    card.style.animation = 'fadeInDown 0.3s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
