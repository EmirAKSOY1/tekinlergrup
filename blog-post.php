<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$slug = $_GET['slug'] ?? '';

$blog_posts = [
    'vinc-kiralama-fiyatlari' => [
        'baslik'    => 'Vinç Kiralama Fiyatları Nasıl Belirlenir?',
        'slug'      => 'vinc-kiralama-fiyatlari',
        'tarih'     => '2026-08-15',
        'tarih_fmt' => '15 Ağustos 2026',
        'kategori'  => 'Rehber',
        'ozet'      => 'Vinç kiralama fiyatını etkileyen faktörler nelerdir? Kapasiteden çalışma süresine, lokasyondan operatör gereksinimine kadar tüm detayları ele alıyoruz.',
        'okuma'     => '5 dakika',
        'ikon'      => '💰',
        'icerik'    => '<p>Vinç kiralama fiyatları birçok faktöre bağlı olarak değişmektedir.</p><h2>Fiyatı Belirleyen Temel Faktörler</h2><h3>1. Vinç Tipi ve Kapasitesi</h3><p>Mobil vinç, sepetli vinç ve ağır yük kaldırma sistemleri farklı ücretlendirme politikalarına sahiptir. Genel olarak kapasite arttıkça günlük kiralama ücreti de yükselir.</p><ul><li><strong>Küçük tonajlı mobil vinç (10–30 ton):</strong> Küçük ölçekli işler için ekonomik seçenek</li><li><strong>Orta tonajlı mobil vinç (30–100 ton):</strong> En yaygın tercih edilen aralık</li><li><strong>Büyük tonajlı sistemler (100 ton+):</strong> Özel proje bazlı fiyatlandırma</li></ul><h3>2. Çalışma Süresi</h3><p>Vinç kiralaması genellikle vardiya (8 saatlik) ya da günlük (10–12 saatlik) olarak fiyatlandırılır. Uzun dönemli kiralamalar günlük orana kıyasla daha avantajlıdır.</p><h3>3. Lokasyon ve Saha Koşulları</h3><p>Balıkesir merkez ile uzak ilçeler (Edremit, Bandırma, Soma, Akhisar vb.) arasında ulaşım maliyeti fiyatları etkileyebilir. Dar alanlarda veya zemin takviyesi gerektiren sahalarda ek hazırlık süreleri hesaba katılır.</p><h3>4. Operatör ve İşçilik</h3><p>Tüm hizmetlerimiz eğitimli ve belgeli operatörlerimizle sunulmaktadır. Operatör ücreti genellikle kiralama bedelinin içindedir.</p><h2>Fiyat Teklifi Nasıl Alınır?</h2><p>Net bir fiyat verebilmemiz için şu bilgileri hazır bulundurmanız yeterlidir: kaldırılacak yükün ağırlığı ve boyutları, çalışma yüksekliği ve mesafesi, iş yeri adresi, tahmini çalışma süresi.</p>',
    ],
    'mobil-vinc-nedir' => [
        'baslik'    => 'Mobil Vinç Nedir? Ne Zaman Tercih Edilmeli?',
        'slug'      => 'mobil-vinc-nedir',
        'tarih'     => '2026-07-20',
        'tarih_fmt' => '20 Temmuz 2026',
        'kategori'  => 'Bilgi',
        'ozet'      => 'Mobil vinç ile sabit vinç arasındaki farkları, mobil vincin avantajlarını ve hangi projelerde tercih edilmesi gerektiğini öğrenin.',
        'okuma'     => '4 dakika',
        'ikon'      => '🚛',
        'icerik'    => '<p>Mobil vinç, karayolunda kendi gücüyle hareket edebilen ve iş yerine kolayca konuşlandırılabilen vinç türüdür. Sabit sistemlere kıyasla sunduğu esneklik, onu birçok proje için tercih edilen çözüm haline getirmektedir.</p><h2>Mobil Vincin Temel Özellikleri</h2><ul><li><strong>Taşınabilirlik:</strong> Projeye araçla gidebilir, kurulum için fazladan altyapı gerekmez.</li><li><strong>Hızlı kurulum:</strong> Sahalara genellikle 1–2 saat içinde konuşlandırılır.</li><li><strong>Geniş kapasite aralığı:</strong> 10 tondan 500 tona kadar farklı modeller mevcuttur.</li><li><strong>Çok yönlü kullanım:</strong> İnşaat, sanayi, liman, altyapı gibi birçok alanda çalışabilir.</li></ul><h2>Hangi Projelerde Tercih Edilmeli?</h2><ul><li>Tek seferlik veya kısa süreli kaldırma işlemleri</li><li>Farklı lokasyonlar arasında hareket gerektiren projeler</li><li>Dar alanlarda veya sınırlı yerleşim alanlarında çalışmalar</li><li>Acil kaldırma operasyonları</li></ul><h2>Balıkesir ve Çevresinde Mobil Vinç</h2><p>Tekinler Grup Vinç olarak Balıkesir merkez başta olmak üzere Edremit, Bandırma, Soma, Akhisar ve çevre ilçelere mobil vinç hizmetimizi hızla ulaştırıyoruz.</p>',
    ],
    'sepetli-vinc-kullanim-alanlari' => [
        'baslik'    => 'Sepetli Vinç Hangi İşlerde Kullanılır?',
        'slug'      => 'sepetli-vinc-kullanim-alanlari',
        'tarih'     => '2026-07-05',
        'tarih_fmt' => '5 Temmuz 2026',
        'kategori'  => 'Rehber',
        'ozet'      => 'Yüksekte çalışma platformu sağlayan sepetli vinç, cephe onarımı, elektrik hattı ve ağaç budama gibi birçok alanda kullanılmaktadır.',
        'okuma'     => '4 dakika',
        'ikon'      => '🧺',
        'icerik'    => '<p>Sepetli vinç, operatörlerin güvenli biçimde yüksekte çalışmasını sağlayan ekipmandır. Merdiven veya iskele kurulamayan alanlarda hayat kurtarıcı çözüm sunar.</p><h2>Başlıca Kullanım Alanları</h2><h3>Bina Cephesi ve Çatı Çalışmaları</h3><p>Bina dış cephesi boyama, kaplama, cam silme ve çatı onarımı gibi işlerde sepetli vinç güvenli ve verimli çalışma ortamı sağlar. İskele kurulum maliyeti ve süresini ortadan kaldırır.</p><h3>Elektrik ve Aydınlatma Çalışmaları</h3><p>Sokak lambası, fabrika aydınlatması ve elektrik hattı bakım-onarım çalışmalarında yaygın biçimde kullanılır.</p><h3>Ağaç Bakımı ve Budama</h3><p>Park, bahçe ve caddelerdeki yüksek ağaçların budanması, kuruyan dalların temizlenmesi gibi işlerde sepetli vinç tercih edilir.</p><h3>Endüstriyel Tesis Bakımları</h3><p>Fabrika içindeki yüksek ekipman bakımı, boru hattı kontrolü ve çatı sistemleri gibi endüstriyel alanlarda kullanılır.</p><h2>Balıkesir\'de Sepetli Vinç</h2><p>Günlük veya yarım günlük kiralama seçenekleriyle esnek çözümler sunuyoruz.</p>',
    ],
    'vinc-is-guvenligi' => [
        'baslik'    => 'Vinç ile Yük Kaldırmada İş Güvenliği',
        'slug'      => 'vinc-is-guvenligi',
        'tarih'     => '2026-06-18',
        'tarih_fmt' => '18 Haziran 2026',
        'kategori'  => 'Güvenlik',
        'ozet'      => 'Vinç operasyonlarında iş güvenliği kritik öneme sahiptir. Sahada dikkat edilmesi gereken güvenlik önlemleri ve prosedürler hakkında bilgi edinin.',
        'okuma'     => '6 dakika',
        'ikon'      => '🛡️',
        'icerik'    => '<p>Vinç operasyonları, doğru uygulandığında son derece güvenlidir; ancak iş güvenliği protokollerine uyulmaması ciddi riskler doğurabilir.</p><h2>Ön Hazırlık ve Saha Değerlendirmesi</h2><ul><li><strong>Zemin taşıma kapasitesi:</strong> Vincin konuşlandırılacağı zeminin taşıma kapasitesi hesaplanmalı, gerekirse çelik plakalar kullanılmalıdır.</li><li><strong>Enerji hatları:</strong> Yakınındaki elektrik hatları tespit edilmeli, minimum 5 metre güvenli mesafe sağlanmalıdır.</li><li><strong>Çevrenin güvence altına alınması:</strong> Çalışma alanı bariyer ve levhalarla işaretlenmelidir.</li></ul><h2>Yük Kontrolü ve Kaldırma Prosedürleri</h2><ul><li>Kaldırılacak yükün ağırlığı önceden ölçülmeli veya hesaplanmalıdır.</li><li>Vincin nominal kapasitesinin %80\'inden fazla yük kaldırılmamalıdır.</li><li>Yük asılıyken hiç kimse yükün altından geçmemelidir.</li></ul><h2>Operatör Yetkinliği</h2><p>Tekinler Grup Vinç olarak tüm operatörlerimiz mesleki yeterlilik belgesi sahibi, düzenli eğitimden geçmiş ve İSG prosedürlerine tam uyumlu şekilde çalışmaktadır.</p>',
    ],
    'oto-kurtarma-ne-zaman' => [
        'baslik'    => 'Oto Kurtarma Hizmeti Hangi Durumlarda Çağrılır?',
        'slug'      => 'oto-kurtarma-ne-zaman',
        'tarih'     => '2026-06-01',
        'tarih_fmt' => '1 Haziran 2026',
        'kategori'  => 'Rehber',
        'ozet'      => 'Araç arızası, kaza veya yolda kalma durumlarında oto kurtarma ve çekici hizmetini ne zaman ve nasıl çağırmanız gerektiğini öğrenin.',
        'okuma'     => '4 dakika',
        'ikon'      => '🚨',
        'icerik'    => '<p>Yolda kalmak veya trafik kazası geçirmek stresli bir deneyimdir. Bu durumlarda oto kurtarma ve çekici hizmetini ne zaman aramanız gerektiğini bilmek süreci kolaylaştırır.</p><h2>Oto Kurtarma Gerektiren Durumlar</h2><h3>Araç Kazaları</h3><p>Trafik kazası sonrasında araç hareket edemez hale geldiyse, raydan çıkmışsa veya şarampole düşmüşse mutlaka profesyonel oto kurtarma ekibi çağrılmalıdır. Yanlış müdahale aracı daha fazla hasar görebilir.</p><h3>Mekanik Arızalar</h3><p>Motor arızası, şanzıman sorunu veya fren arızası gibi durumlarda aracı kendiniz çekmeye çalışmayın. Özellikle AWD veya 4WD araçlarda yanlış çekicilik ciddi mekanik hasarlara yol açabilir.</p><h3>Lastik Patlaması ve Yakıt Tükenmesi</h3><p>Lastik patlaması sonrası yedek lastik yoksa veya yolda yakıt biten araçlar için çekici hizmetine başvurun.</p><h3>Sel, Çukur veya Çamurda Mahsur Kalma</h3><p>Sel baskını, derin çukur veya çamurlu yolda mahsur kalan araçlar için özel oto kurtarma ekipmanları kullanılmaktadır.</p><h2>7/24 Balıkesir Oto Kurtarma</h2><p>Tekinler Grup Vinç olarak Balıkesir ve çevresinde 7 gün 24 saat oto kurtarma hizmetimizle yanınızdayız. Soma, Akhisar, Bandırma, Edremit gibi uzak noktalara da hızla ulaşıyoruz.</p>',
    ],
    'balikesir-vinc-kiralama-dikkat' => [
        'baslik'    => "Balıkesir'de Vinç Kiralarken Dikkat Edilmesi Gerekenler",
        'slug'      => 'balikesir-vinc-kiralama-dikkat',
        'tarih'     => '2026-05-10',
        'tarih_fmt' => '10 Mayıs 2026',
        'kategori'  => 'Yerel',
        'ozet'      => "Balıkesir'de vinç kiralama hizmeti alırken hangi soruları sormanız, nelere dikkat etmeniz gerektiğini anlatan pratik bir rehber.",
        'okuma'     => '5 dakika',
        'ikon'      => '📍',
        'icerik'    => "<p>Balıkesir'de inşaat, sanayi veya altyapı projeleriniz için vinç kiralama hizmeti alırken doğru tercihi yapmanız hem güvenlik hem de maliyet açısından önem taşır.</p><h2>Firma Güvenilirliği ve Belgeleri</h2><ul><li>Kiralama yapacağınız firmanın faaliyet belgesi ve mesleki yeterlilik belgesi olduğundan emin olun.</li><li>Vinç ve operatörlerin periyodik muayene belgelerini isteyin.</li><li>Firmanın sigorta kapsamını öğrenin; hasar durumunda nasıl bir prosedür izlendiğini önceden netleştirin.</li></ul><h2>Doğru Ekipman Seçimi</h2><ul><li>Yüksekte çalışma için: Sepetli vinç</li><li>Ağır malzeme kaldırma için: Mobil vinç veya ağır yük kaldırma sistemi</li><li>Fabrika/tesis kurulumu için: Kapasiteye uygun mobil vinç</li></ul><h2>Saha Ön Değerlendirmesi</h2><p>Güvenilir vinç firmaları, iş öncesinde ücretsiz saha değerlendirmesi yapar. Bu sayede doğru kapasite belirlenir, zemin koşulları değerlendirilir ve operasyon planı önceden hazırlanır.</p><h2>Balıkesir Özelinde Dikkat Edilmesi Gerekenler</h2><p>Edremit, Soma veya Akhisar gibi uzak noktalar için ulaşım süresini ve ekstra maliyetleri önceden netleştirin. Tekinler Grup Vinç olarak şeffaf fiyatlandırma ve profesyonel destek sunuyoruz.</p>",
    ],
];

if (!$slug || !isset($blog_posts[$slug])) {
    header('Location: /blog');
    exit;
}

$post = $blog_posts[$slug];

$page_meta = [
    'title'       => $post['baslik'] . ' | Tekinler Grup Vinç Blog',
    'description' => $post['ozet'],
    'canonical'   => SITE_URL . '/blog/' . $slug,
    'og_type'     => 'article',
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa', 'url' => SITE_URL . '/'],
    ['name' => 'Blog',      'url' => SITE_URL . '/blog'],
    ['name' => $post['baslik'], 'url' => SITE_URL . '/blog/' . $slug],
];

include __DIR__ . '/includes/header.php';
?>
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <div style="font-size:3.5rem;margin-bottom:1rem;filter:drop-shadow(0 6px 12px rgba(0,0,0,0.3));" aria-hidden="true"><?= $post['ikon'] ?></div>
            <span class="section-label" style="background:rgba(245,158,11,.2);color:var(--color-accent);border:1px solid rgba(245,158,11,.4);padding:4px 14px;border-radius:999px;font-size:var(--fs-xs);font-weight:700;display:inline-block;margin-bottom:1rem;"><?= htmlspecialchars($post['kategori']) ?> REHBERİ</span>
            <h1 style="font-size:clamp(1.6rem,4vw,2.5rem);max-width:860px;margin-inline:auto;line-height:1.3;font-weight:800;"><?= htmlspecialchars($post['baslik']) ?></h1>
            <div style="display:flex;align-items:center;justify-content:center;gap:1.5rem;margin-top:1.25rem;font-size:var(--fs-sm);opacity:.9;flex-wrap:wrap;">
                <span>👤 Tekinler Grup Teknik Ekip</span>
                <span>•</span>
                <time datetime="<?= $post['tarih'] ?>">📅 <?= $post['tarih_fmt'] ?></time>
                <span>•</span>
                <span>⏱️ <?= $post['okuma'] ?> okuma süresi</span>
            </div>
        </div>
    </div>
</section>

<!-- Blog İçerik & Sidebar Alanı -->
<section class="section">
    <div class="container">
        <div class="blog-post-layout">
            <!-- Ana Makale İçeriği -->
            <article class="blog-post-content" itemscope itemtype="https://schema.org/BlogPosting">
                <meta itemprop="headline" content="<?= htmlspecialchars($post['baslik']) ?>">
                <meta itemprop="datePublished" content="<?= $post['tarih'] ?>">
                <meta itemprop="author" content="Tekinler Grup Vinç">

                <!-- Özet Vurgu Kutusu -->
                <div class="blog-post-lead" itemprop="description">
                    <p>💡 <strong>Özet:</strong> <?= htmlspecialchars($post['ozet']) ?></p>
                </div>

                <!-- Makale Metni -->
                <div class="blog-post-body" itemprop="articleBody">
                    <?= $post['icerik'] ?>
                </div>

                <!-- Makale İçi Teklif Çağrısı -->
                <div class="blog-post-cta">
                    <h3>Projeniz İçin Doğru Vinci Birlikte Seçelim</h3>
                    <p>Balıkesir, Soma, Akhisar, Bandırma veya Manisa'da vinç kiralama, ağır kaldırma ve oto kurtarma gereksinimlerinizde 7/24 yanınızdayız.</p>
                    <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:1.25rem;">
                        <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-secondary btn-lg" id="blog-post-tel-btn">📞 <?= FIRMA_TELEFON ?></a>
                        <a href="/iletisim" class="btn btn-outline btn-lg" style="color:white;border-color:rgba(255,255,255,.4);">Ücretsiz Keşif İste</a>
                    </div>
                </div>

                <!-- Alt Paylaşım & Navigasyon Çubuğu -->
                <div class="blog-post-bottom-bar">
                    <a href="/blog" class="btn btn-outline btn-sm" style="color:var(--color-primary);border-color:var(--color-gray-300);">
                        ← Tüm Blog Yazılarına Dön
                    </a>
                    <div class="blog-share-btns">
                        <span style="font-size:var(--fs-xs);font-weight:600;color:var(--color-gray-500);margin-right:4px;">Paylaş:</span>
                        <a href="https://api.whatsapp.com/send?text=<?= urlencode($post['baslik'] . ' ' . SITE_URL . '/blog/' . $slug) ?>" target="_blank" rel="noopener" class="blog-share-btn blog-share-wa" aria-label="WhatsApp'ta paylaş">
                            WhatsApp
                        </a>
                        <button type="button" class="blog-share-btn blog-share-copy" id="copy-link-btn" onclick="navigator.clipboard.writeText(window.location.href);this.innerText='Kopyalandı!';setTimeout(()=>this.innerText='Linki Kopyala',2000);">
                            Linki Kopyala
                        </button>
                    </div>
                </div>
            </article>

            <!-- Sağ Kenar Çubuğu (Sidebar) -->
            <aside class="blog-post-sidebar">
                <!-- Hızlı İletişim Widget -->
                <div class="blog-sidebar-widget">
                    <h3>⚡ Hızlı İletişim</h3>
                    <p>Operasyon ve kiralama talepleriniz için operatörlerimize doğrudan ulaşın.</p>
                    <div style="display:flex;flex-direction:column;gap:var(--spacing-2);">
                        <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary" id="sidebar-tel-btn" style="text-align:center;justify-content:center;">
                            📞 <?= FIRMA_TELEFON ?>
                        </a>
                        <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20blogdaki%20yazınızı%20okudum%2C%20vinç%20hizmeti%20hakkında%20bilgi%20almak%20istiyorum." class="btn btn-whatsapp" id="sidebar-wa-btn" target="_blank" rel="noopener" style="text-align:center;justify-content:center;">
                            💬 WhatsApp ile Yazın
                        </a>
                    </div>
                </div>

                <!-- Hizmetlerimiz Widget -->
                <div class="blog-sidebar-widget">
                    <h3>🏗️ Hizmetlerimiz</h3>
                    <ul class="blog-sidebar-links">
                        <li><a href="/hizmetler/vinc-kiralama"><span>🏗️ Vinç Kiralama</span> <span>→</span></a></li>
                        <li><a href="/hizmetler/mobil-vinc"><span>🚛 Mobil Vinç</span> <span>→</span></a></li>
                        <li><a href="/hizmetler/sepetli-vinc"><span>🧺 Sepetli Vinç</span> <span>→</span></a></li>
                        <li><a href="/hizmetler/agir-yuk-kaldirma"><span>⚙️ Ağır Yük Kaldırma</span> <span>→</span></a></li>
                        <li><a href="/hizmetler/oto-kurtarma"><span>🚨 Oto Kurtarma</span> <span>→</span></a></li>
                        <li><a href="/hizmetler/cekici"><span>🚜 Çekici</span> <span>→</span></a></li>
                    </ul>
                </div>

                <!-- Popüler Rehberler -->
                <div class="blog-sidebar-widget">
                    <h3>📖 Popüler Rehberler</h3>
                    <ul class="blog-sidebar-links">
                        <?php
                        $side_posts = array_filter($blog_posts, fn($p) => $p['slug'] !== $slug);
                        $side_posts = array_slice($side_posts, 0, 4);
                        foreach ($side_posts as $sp):
                        ?>
                        <li>
                            <a href="/blog/<?= $sp['slug'] ?>">
                                <span><?= $sp['ikon'] ?> <?= htmlspecialchars($sp['baslik']) ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Hizmet Bölgeleri -->
                <div class="blog-sidebar-widget">
                    <h3>📍 Hizmet Ağımız</h3>
                    <p style="font-size:var(--fs-xs);color:var(--color-gray-500);margin-bottom:var(--spacing-3);">Ekiplerimizin aktif çalışma yürüttüğü noktalar:</p>
                    <div class="blog-sidebar-region-pills">
                        <span class="blog-sidebar-region-pill">Balıkesir Merkez</span>
                        <span class="blog-sidebar-region-pill">Soma</span>
                        <span class="blog-sidebar-region-pill">Akhisar</span>
                        <span class="blog-sidebar-region-pill">Bandırma</span>
                        <span class="blog-sidebar-region-pill">Edremit</span>
                        <span class="blog-sidebar-region-pill">Balya</span>
                        <span class="blog-sidebar-region-pill">Manisa</span>
                        <span class="blog-sidebar-region-pill">Gönen</span>
                    </div>
                </div>
            </aside>
        </div>

        <!-- Diğer Blog Yazıları -->
        <div style="margin-top:var(--spacing-16);padding-top:var(--spacing-12);border-top:1px solid var(--color-gray-200);">
            <div class="section-header">
                <span class="section-label">Önerilen Yazılar</span>
                <h2 class="section-title">İlginizi Çekebilecek Diğer Rehberler</h2>
            </div>
            <div class="blog-grid">
                <?php
                $other_posts = array_filter($blog_posts, fn($p) => $p['slug'] !== $slug);
                $other_posts = array_slice($other_posts, 0, 3);
                foreach ($other_posts as $op):
                ?>
                <article class="blog-card" itemscope itemtype="https://schema.org/BlogPosting">
                    <a href="/blog/<?= $op['slug'] ?>" class="blog-card-thumb-link" style="text-decoration:none;" aria-label="<?= htmlspecialchars($op['baslik']) ?>">
                        <div class="blog-card-thumb">
                            <span class="blog-card-category-badge"><?= htmlspecialchars($op['kategori']) ?></span>
                            <span class="blog-card-thumb-icon" aria-hidden="true"><?= $op['ikon'] ?></span>
                        </div>
                    </a>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span class="blog-card-meta-item">
                                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <time datetime="<?= $op['tarih'] ?>"><?= $op['tarih_fmt'] ?></time>
                            </span>
                            <span>•</span>
                            <span class="blog-card-meta-item">
                                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                <?= $op['okuma'] ?>
                            </span>
                        </div>
                        <h3 class="blog-card-title" itemprop="headline">
                            <a href="/blog/<?= $op['slug'] ?>"><?= htmlspecialchars($op['baslik']) ?></a>
                        </h3>
                        <p class="blog-card-desc" itemprop="description">
                            <?= htmlspecialchars(mb_substr($op['ozet'], 0, 110)) ?>...
                        </p>
                        <div class="blog-card-footer">
                            <div class="blog-card-author">
                                <div class="blog-author-dot">TG</div>
                                <span>Tekinler Ekip</span>
                            </div>
                            <a href="/blog/<?= $op['slug'] ?>" class="blog-read-more-link" aria-label="<?= htmlspecialchars($op['baslik']) ?> yazısını oku">
                                Devamını Oku
                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>