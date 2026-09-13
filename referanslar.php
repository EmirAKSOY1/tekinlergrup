<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'Referanslarımız & Tamamlanan Projeler | Tekinler Grup Vinç Balıkesir',
    'description' => 'Tekinler Grup Vinç\'in Balıkesir, Soma, Akhisar, Bandırma ve Manisa\'da birlikte çalıştığı kurumsal firmalar, fabrika ve belediye referansları.',
    'canonical'   => SITE_URL . '/referanslar',
];
$breadcrumbs = [
    ['name' => 'Ana Sayfa',  'url' => SITE_URL . '/'],
    ['name' => 'Referanslar','url' => SITE_URL . '/referanslar'],
];
include __DIR__ . '/includes/header.php';

$companies = [
    [
        'id'       => 'balikesir-beton',
        'ad'       => 'Balıkesir Beton A.Ş.',
        'sektor'   => 'İnşaat & Hazır Beton',
        'filtre'   => 'insaat',
        'renk'     => '#1a2540',
        'hizmet'   => 'Mobil Vinç Kiralama',
        'bolge'    => 'Balıkesir Merkez OSB',
        'kapsam'   => '60 Ton Ağır Kaldırma',
        'detay'    => 'Yeni hazır beton santralı ünite kurulumu ve yüksek tonajlı beton pompası montaj operasyonlarında mobil vinç desteği sağlandı.',
        'yil'      => '2024',
        'etiket'   => 'İnşaat & Sanayi',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#1a2540"/><path d="M24 10L36 17V31L24 38L12 31V17L24 10Z" stroke="#f59e0b" stroke-width="2.5" stroke-linejoin="round"/><path d="M24 10V38" stroke="#f59e0b" stroke-width="1.8"/><path d="M12 17L36 31" stroke="#f59e0b" stroke-width="1.8"/><path d="M36 17L12 31" stroke="#f59e0b" stroke-width="1.8"/><circle cx="24" cy="24" r="4" fill="#f59e0b"/></svg>'
    ],
    [
        'id'       => 'ege-insaat',
        'ad'       => 'Ege İnşaat Ltd. Şti.',
        'sektor'   => 'Konut & Ticari Yapı',
        'filtre'   => 'insaat',
        'renk'     => '#1d4ed8',
        'hizmet'   => 'Ağır Yük Kaldırma',
        'bolge'    => 'Edremit & Körfez',
        'kapsam'   => 'Çelik Çatı Montajı',
        'detay'    => 'Çok katlı rezidans ve iş merkezi projesinde ağır çelik çatı konstrüksiyon elemanlarının milimetrik hassasiyetle yerleştirilmesi.',
        'yil'      => '2024',
        'etiket'   => 'İnşaat',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#1d4ed8"/><path d="M14 36V14L28 22V36" stroke="#fff" stroke-width="2.5" stroke-linejoin="round"/><path d="M28 22L36 18V36" stroke="#93c5fd" stroke-width="2" stroke-linejoin="round"/><path d="M10 36H38" stroke="#f59e0b" stroke-width="2.5" stroke-linecap="round"/><path d="M21 18L35 26" stroke="#f59e0b" stroke-width="2"/></svg>'
    ],
    [
        'id'       => 'soma-termik',
        'ad'       => 'Soma Termik Santral A.Ş.',
        'sektor'   => 'Enerji & Ağır Sanayi',
        'filtre'   => 'enerji',
        'renk'     => '#7c3aed',
        'hizmet'   => 'Endüstriyel Kaldırma',
        'bolge'    => 'Soma / Manisa',
        'kapsam'   => 'Türbin & Kazan Revizyonu',
        'detay'    => 'Tesis planlı revizyon sürecinde ağır türbin blokları ve enerji iletim ekipmanlarının sıfır iş kazası hedefiyle konumlandırılması.',
        'yil'      => '2023–2024',
        'etiket'   => 'Enerji',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#7c3aed"/><circle cx="24" cy="24" r="14" stroke="#c4b5fd" stroke-width="2"/><path d="M26 12L18 25H25L22 36L31 22H24L26 12Z" fill="#fbbf24" stroke="#fbbf24" stroke-width="1.5" stroke-linejoin="round"/></svg>'
    ],
    [
        'id'       => 'akhisar-tarim',
        'ad'       => 'Akhisar Tarım Kooperatifi',
        'sektor'   => 'Tarım & Depolama Tesisleri',
        'filtre'   => 'tarim',
        'renk'     => '#059669',
        'hizmet'   => 'Sepetli Vinç & Montaj',
        'bolge'    => 'Akhisar',
        'kapsam'   => 'Silo & Çatı Yenileme',
        'detay'    => 'Tahıl silolarının çatı izolasyonu, havalandırma motoru değişimi ve yüksek gerilim elektrik hatlarının sepetli vinçle onarımı.',
        'yil'      => '2023',
        'etiket'   => 'Tarım & Gıda',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#059669"/><path d="M24 38V12" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/><path d="M24 16C20 16 16 19 16 23C20 23 24 20 24 16Z" fill="#a7f3d0"/><path d="M24 16C28 16 32 19 32 23C28 23 24 20 24 16Z" fill="#fde68a"/><path d="M24 24C19 24 15 27 15 32C20 32 24 29 24 24Z" fill="#a7f3d0"/><path d="M24 24C29 24 33 27 33 32C28 32 24 29 24 24Z" fill="#fde68a"/></svg>'
    ],
    [
        'id'       => 'bandirma-liman',
        'ad'       => 'Bandırma Liman İşletmeleri',
        'sektor'   => 'Denizcilik & Liman Lojistiği',
        'filtre'   => 'lojistik',
        'renk'     => '#0891b2',
        'hizmet'   => 'Ağır Kaldırma & Transfer',
        'bolge'    => 'Bandırma Limanı',
        'kapsam'   => 'Gemi Ekipman Transferi',
        'detay'    => 'Kargo gemilerinden tahliye edilen ağır endüstriyel makinelerin rıhtımdan özel nakliye platformlarına emniyetle yüklenmesi.',
        'yil'      => '2023–2024',
        'etiket'   => 'Liman & Lojistik',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#0891b2"/><path d="M10 30L24 35L38 30L35 24H13L10 30Z" fill="#fff"/><path d="M24 12V24" stroke="#f59e0b" stroke-width="3" stroke-linecap="round"/><path d="M19 18H29" stroke="#f59e0b" stroke-width="2" stroke-linecap="round"/><path d="M8 36C14 38 18 36 24 38C30 36 34 38 40 36" stroke="#67e8f9" stroke-width="2.5" stroke-linecap="round"/></svg>'
    ],
    [
        'id'       => 'balya-maden',
        'ad'       => 'Balya Madencilik İşletmeleri',
        'sektor'   => 'Yeraltı & Yerüstü Maden',
        'filtre'   => 'maden',
        'renk'     => '#b45309',
        'hizmet'   => 'Mobil Vinç & Ağır Yük',
        'bolge'    => 'Balya Maden Sahası',
        'kapsam'   => 'Kırıcı Tesis Montajı',
        'detay'    => 'Zorlu arazi ve eğimli zemin koşullarında cevher eleme-kırma tesisinin ağır gövde bloklarının güvenle konuşlandırılması.',
        'yil'      => '2023',
        'etiket'   => 'Madencilik',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#b45309"/><path d="M12 36L22 18L26 23L36 12L38 36H12Z" fill="#d97706"/><path d="M22 18L30 36" stroke="#fef3c7" stroke-width="2"/><path d="M14 26L20 20M34 20L28 26" stroke="#fef3c7" stroke-width="2" stroke-linecap="round"/><circle cx="36" cy="12" r="3" fill="#fbbf24"/></svg>'
    ],
    [
        'id'       => 'gonen-turizm',
        'ad'       => 'Gönen Termal & Turizm A.Ş.',
        'sektor'   => 'Turizm & Otelcilik',
        'filtre'   => 'turizm',
        'renk'     => '#db2777',
        'hizmet'   => 'Sepetli Vinç Hizmeti',
        'bolge'    => 'Gönen',
        'kapsam'   => 'Cephe & Cam Yenileme',
        'detay'    => 'Termal otel kompleksinin 7 katlı ana binasında dış cephe kompozit panel montajı ve aydınlatma armatürlerinin değişimi.',
        'yil'      => '2023',
        'etiket'   => 'Turizm & Tesis',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#db2777"/><path d="M14 36V18L24 12L34 18V36H14Z" stroke="#fff" stroke-width="2.5" stroke-linejoin="round"/><circle cx="24" cy="22" r="3" fill="#fbcfe8"/><path d="M20 36V28H28V36" fill="#f472b6"/><path d="M18 10L24 6L30 10" stroke="#fde047" stroke-width="2" stroke-linecap="round"/></svg>'
    ],
    [
        'id'       => 'burhaniye-belediye',
        'ad'       => 'Burhaniye Belediyesi Destek Hiz.',
        'sektor'   => 'Kamu & Yerel Yönetim',
        'filtre'   => 'kamu',
        'renk'     => '#dc2626',
        'hizmet'   => 'Sepetli Vinç & Oto Kurtarma',
        'bolge'    => 'Burhaniye / Körfez',
        'kapsam'   => 'Aydınlatma & Acil Çekim',
        'detay'    => 'İlçe genelinde sahil ve cadde aydınlatma direklerinin periyodik revizyonu ile fırtına/afet sonrası acil yol kurtarma operasyonları.',
        'yil'      => '2022–2024',
        'etiket'   => 'Kamu Hizmeti',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#dc2626"/><circle cx="24" cy="24" r="14" stroke="#fff" stroke-width="2"/><path d="M18 24C18 20.6863 20.6863 18 24 18C27.3137 18 30 20.6863 30 24" stroke="#fde047" stroke-width="2" stroke-linecap="round"/><path d="M24 14V17M24 31V34M14 24H17M31 24H34" stroke="#fde047" stroke-width="2" stroke-linecap="round"/><path d="M20 30L24 26L28 30" stroke="#fff" stroke-width="2" stroke-linejoin="round"/></svg>'
    ],
    [
        'id'       => 'manisa-fabrika',
        'ad'       => 'Manisa Endüstriyel İmalat Ltd.',
        'sektor'   => 'Metal & Makine Sanayi',
        'filtre'   => 'sanayi',
        'renk'     => '#4f46e5',
        'hizmet'   => 'Endüstriyel Kaldırma & Taşıma',
        'bolge'    => 'Manisa OSB',
        'kapsam'   => 'CNC Tezgah Relokasyonu',
        'detay'    => 'Üretim tesisi genişleme projesinde 25 tonluk CNC işleme merkezlerinin zemin korumalı hidrolik ekipmanlarla yeni hatta aktarımı.',
        'yil'      => '2024',
        'etiket'   => 'Sanayi & İmalat',
        'svg'      => '<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="10" fill="#4f46e5"/><path d="M12 36V22L20 26V22L28 26V18L36 22V36H12Z" fill="#818cf8"/><path d="M16 36V30H20V36" fill="#fff"/><path d="M24 36V30H28V36" fill="#fff"/><circle cx="34" cy="14" r="3" fill="#f59e0b"/></svg>'
    ],
];

$proje_tipleri = [
    [
        'ikon'    => 'crane',
        'baslik'  => 'İnşaat ve Altyapı Projeleri',
        'badge'   => '10–200 Ton Kapasite',
        'renk'    => '#f59e0b',
        'ozet'    => 'Konut, sanayi yapıları, köprü ve altyapı şantiyelerinde çelik çatı, kolon ve ağır kirişlerin hassas montajı.',
        'maddeler'=> [
            'Çelik konstrüksiyon ve çatı montajı',
            'Prefabrik yapı & köprü kirişi yerleştirme',
            'Yüksek katlı binalarda malzeme aktarımı',
        ],
        'link'    => '/hizmetler/vinc-kiralama',
    ],
    [
        'ikon'    => 'heavy-lift',
        'baslik'  => 'Endüstriyel Tesis & Fabrika',
        'badge'   => 'Hassas Relokasyon',
        'renk'    => '#3b82f6',
        'ozet'    => 'Fabrika içi dar alanlarda pres, torna, trafo ve CNC tezgahlarının zemin takviyesiyle güvenli taşınması.',
        'maddeler'=> [
            'CNC tezgah, pres ve torna taşımaları',
            'Trafo, jeneratör ve kazan montajları',
            'Tesis içi dar alan ve hassas konumlandırma',
        ],
        'link'    => '/hizmetler/agir-yuk-kaldirma',
    ],
    [
        'ikon'    => 'basket-crane',
        'baslik'  => 'Yüksekte Sepetli Erişim',
        'badge'   => '54 Metreye Kadar Bom',
        'renk'    => '#10b981',
        'ozet'    => 'İskele maliyetini ortadan kaldıran, operatör emniyet kemerli ve sertifikalı sepetli platform çözümleri.',
        'maddeler'=> [
            'Dış cephe kompozit kaplama & cam silme',
            'Silo, çatı, baca kontrol ve onarım işleri',
            'Aydınlatma direkleri ve yüksek gerilim hatları',
        ],
        'link'    => '/hizmetler/sepetli-vinc',
    ],
    [
        'ikon'    => 'car-rescue',
        'baslik'  => '7/24 Acil Oto Kurtarma & Çekici',
        'badge'   => 'Kesintisiz Nöbetçi Ekip',
        'renk'    => '#ef4444',
        'ozet'    => 'Balıkesir, Soma, Akhisar ve tüm otoyol hatlarında binek, ticari ve ağır vasıtalar için anında intikal.',
        'maddeler'=> [
            'Tır, kamyon, otobüs ve ağır vasıta çekimi',
            'Şarampol ve kaza yerinden vinçle çıkarma',
            'Kaskolu ve sigortalı taşıma güvencesi',
        ],
        'link'    => '/hizmetler/oto-kurtarma',
    ],
    [
        'ikon'    => 'port',
        'baslik'  => 'Liman, Tersane & Lojistik',
        'badge'   => 'Liman Sahası & Elleçleme',
        'renk'    => '#0891b2',
        'ozet'    => 'Bandırma Limanı ve lojistik depolarda gemi yük tahliyesi, konteyner aktarımı ve ağır parça elleçleme.',
        'maddeler'=> [
            'Gemi yük indirme ve ağır parça transferi',
            'Liman ekipmanı kurulumu ve konumlandırma',
            'Özel dorse ve platform aktarma operasyonları',
        ],
        'link'    => '/hizmetler/mobil-vinc',
    ],
    [
        'ikon'    => 'flash',
        'baslik'  => 'Enerji & Madencilik Tesisleri',
        'badge'   => 'Ağır Sanayi & Maden',
        'renk'    => '#7c3aed',
        'ozet'    => 'RES rüzgar santralleri, termik santraller ve maden ocaklarında periyodik revizyon ve ağır makine değişimi.',
        'maddeler'=> [
            'Rüzgar türbini jeneratör ve kanat montajı',
            'Maden cevher kırıcı ve konveyör kurulumu',
            'Termik santral ağır kazan ve türbin revizyonu',
        ],
        'link'    => '/hizmetler/agir-yuk-kaldirma',
    ],
];
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(245,158,11,.2);color:var(--color-accent);border:1px solid rgba(245,158,11,.4);padding:4px 14px;border-radius:999px;font-size:var(--fs-xs);font-weight:700;display:inline-block;margin-bottom:1rem;">GÜÇLÜ İŞ ORTAKLIKLARI</span>
            <h1>Referanslarımız ve Tamamlanan Projeler</h1>
            <p>Balıkesir, Soma, Akhisar, Bandırma, Balya ve Manisa genelinde sanayi kuruluşları, müteahhitler ve kamu kurumlarıyla başarıyla yürüttüğümüz çalışmalar.</p>
        </div>
    </div>
</section>

<!-- ===== İSTATİSTİKLER ===== -->
<section class="section" style="background:var(--color-gray-50);padding-block:var(--spacing-12);">
    <div class="container">
        <div class="ref-stats-grid">
            <div class="ref-stat-card">
                <span class="ref-stat-icon"><?= render_icon('crane', '', 28) ?></span>
                <div class="ref-stat-num">500<span>+</span></div>
                <div class="ref-stat-label">Tamamlanan Operasyon</div>
            </div>
            <div class="ref-stat-card">
                <span class="ref-stat-icon"><?= render_icon('building', '', 28) ?></span>
                <div class="ref-stat-num">45<span>+</span></div>
                <div class="ref-stat-label">Kurumsal İş Ortağı</div>
            </div>
            <div class="ref-stat-card">
                <span class="ref-stat-icon"><?= render_icon('clock', '', 28) ?></span>
                <div class="ref-stat-num">15<span>+</span></div>
                <div class="ref-stat-label">Yıllık Tecrübe</div>
            </div>
            <div class="ref-stat-card">
                <span class="ref-stat-icon"><?= render_icon('pin', '', 28) ?></span>
                <div class="ref-stat-num">18<span>+</span></div>
                <div class="ref-stat-label">Hizmet Verilen İlçe</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ŞİRKET REFERANSLARI ===== -->
<section class="section" aria-labelledby="ref-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Güvenilir Çözüm Ortağı</span>
            <h2 class="section-title" id="ref-baslik">Birlikte Çalıştığımız Kurum ve Şirketler</h2>
            <p class="section-desc">
                Ağır yük kaldırma, sepetli vinç, fabrika montajı ve oto kurtarma operasyonlarında hizmet sunduğumuz seçkin iş ortaklarımız.
            </p>
        </div>

        <!-- Filtre Sekmeleri -->
        <div class="ref-filters-wrap" id="ref-filters" role="tablist">
            <button type="button" class="ref-filter-btn active" data-filter="all">Tüm Projeler (<?= count($companies) ?>)</button>
            <button type="button" class="ref-filter-btn" data-filter="insaat">İnşaat</button>
            <button type="button" class="ref-filter-btn" data-filter="enerji">Enerji & Maden</button>
            <button type="button" class="ref-filter-btn" data-filter="sanayi">Sanayi & Fabrika</button>
            <button type="button" class="ref-filter-btn" data-filter="lojistik">Liman & Lojistik</button>
            <button type="button" class="ref-filter-btn" data-filter="kamu">Kamu & Belediye</button>
        </div>

        <!-- Şirket Kartları Grid -->
        <div class="ref-companies-grid" id="ref-grid">
            <?php foreach ($companies as $company): ?>
            <article class="ref-company-card" data-category="<?= $company['filtre'] ?>" style="--card-brand: <?= $company['renk'] ?>;">
                <!-- Kart Üst Başlık & Logo -->
                <div class="ref-card-top">
                    <!-- Kurumsal SVG Logo Çerçevesi -->
                    <div class="ref-logo-wrap" title="<?= htmlspecialchars($company['ad']) ?>">
                        <?= $company['svg'] ?>
                    </div>
                    <!-- Şirket Başlık ve Bilgiler -->
                    <div class="ref-card-header-info">
                        <h3 class="ref-company-name"><?= htmlspecialchars($company['ad']) ?></h3>
                        <div class="ref-sector-row">
                            <span class="ref-sector-badge"><?= htmlspecialchars($company['sektor']) ?></span>
                            <span class="ref-verified-pill">
                                <span class="ref-verified-dot"></span>
                                Onaylı Referans
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Yapılandırılmış Operasyon Bilgi Paneli -->
                <div class="ref-specs-grid">
                    <div class="ref-spec-item">
                        <span class="ref-spec-label">Hizmet Tipi</span>
                        <span class="ref-spec-val"><?= render_icon('crane', '', 14) ?> <?= htmlspecialchars($company['hizmet']) ?></span>
                    </div>
                    <div class="ref-spec-item">
                        <span class="ref-spec-label">Operasyon Kapsamı</span>
                        <span class="ref-spec-val"><?= render_icon('flash', '', 14) ?> <?= htmlspecialchars($company['kapsam']) ?></span>
                    </div>
                    <div class="ref-spec-item">
                        <span class="ref-spec-label">Lokasyon</span>
                        <span class="ref-spec-val"><?= render_icon('pin', '', 14) ?> <?= htmlspecialchars($company['bolge']) ?></span>
                    </div>
                    <div class="ref-spec-item">
                        <span class="ref-spec-label">Çalışma Yılı</span>
                        <span class="ref-spec-val"><?= render_icon('calendar', '', 14) ?> <?= htmlspecialchars($company['yil']) ?></span>
                    </div>
                </div>

                <!-- Proje Açıklaması -->
                <p class="ref-card-desc"><?= htmlspecialchars($company['detay']) ?></p>

                <!-- Kart Alt Bilgi & Güvenlik Rozeti -->
                <div class="ref-card-footer">
                    <span class="ref-trust-tag">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        İSG Belgeli
                    </span>
                    <span class="ref-year-tag"><?= htmlspecialchars($company['etiket']) ?></span>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== PROJE KATEGORİLERİ ("Hangi Projelerde Görev Alıyoruz?") ===== -->
<section class="section" style="background:var(--color-gray-50);" aria-labelledby="proje-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Uzmanlık Alanlarımız</span>
            <h2 class="section-title" id="proje-baslik">Hangi Projelerde Görev Alıyoruz?</h2>
            <p class="section-desc">Geniş ve modern makine parkımızla inşaattan ağır sanayiye, liman operasyonlarından acil oto kurtarmaya kadar her sahada yanınızdayız.</p>
        </div>
        <div class="ref-project-types">
            <?php foreach ($proje_tipleri as $proje): ?>
            <div class="ref-project-card" style="--project-accent: <?= $proje['renk'] ?>;">
                <!-- Üst Sıra: İkon Rozeti ve Kapasite Etiketi -->
                <div class="ref-project-top-row">
                    <div class="ref-project-icon-badge" aria-hidden="true">
                        <?= render_icon($proje['ikon'], '', 28) ?>
                    </div>
                    <span class="ref-project-badge"><?= htmlspecialchars($proje['badge']) ?></span>
                </div>

                <!-- Başlık ve Özet -->
                <h3><?= htmlspecialchars($proje['baslik']) ?></h3>
                <p><?= htmlspecialchars($proje['ozet']) ?></p>

                <!-- Yapılan İşlemler Kontrol Listesi -->
                <ul class="ref-project-checklist">
                    <?php foreach ($proje['maddeler'] as $madde): ?>
                    <li>
                        <span class="ref-project-check-icon" aria-hidden="true">✓</span>
                        <span><?= htmlspecialchars($madde) ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Alt Link / Hizmet Bağlantısı -->
                <div class="ref-project-footer">
                    <a href="<?= $proje['link'] ?>" class="ref-project-link">
                        Hizmet Detaylarını İncele
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== MÜŞTERİ YORUMLARI ===== -->
<?php
$musteri_yorumlari = [
    [
        'yorum'       => 'Edremit şantiyemizde çelik çatı montajında Tekinler Grup ile çalıştık. Operatör son derece deneyimliydi, milimetrik hassasiyetle yerleşim sağlandı. Zamanlama ve iş güvenliği standartları kusursuzdu.',
        'isim'        => 'Murat K.',
        'unvan'       => 'Şantiye Şefi',
        'lokasyon'    => 'Edremit / Körfez',
        'avatar_text' => 'MK',
        'avatar_bg'   => '#1e3a8a',
    ],
    [
        'yorum'       => 'Planlı tesis bakım dönemimizde ağır tonajlı mobil vinç ihtiyacımız oldu. Kısa sürede tam donanımlı intikal ettiler. Yüksek riskli ağır blokların transferini sıfır iş kazası ile emniyetle tamamladılar.',
        'isim'        => 'Cemil B.',
        'unvan'       => 'Bakım & Tesis Müdürü',
        'lokasyon'    => 'Soma / Manisa',
        'avatar_text' => 'CB',
        'avatar_bg'   => '#5b21b6',
    ],
    [
        'yorum'       => 'Bandırma aktarma sahamızda yüksek tonajlı sanayi makinelerinin tahliyesini gerçekleştirdik. Belgeleri eksiksiz, operatörleri sertifikalı ve donanımları güncel bir ekiple çalışmak büyük güven verdi.',
        'isim'        => 'Serkan Y.',
        'unvan'       => 'Lojistik & Operasyon Sorumlusu',
        'lokasyon'    => 'Bandırma / Balıkesir',
        'avatar_text' => 'SY',
        'avatar_bg'   => '#075985',
    ],
];
?>
<section class="section why-us" aria-labelledby="musteri-baslik">
    <div class="container">
        <div class="section-header">
            <span class="section-label" style="color:var(--color-accent);">Müşteri Memnuniyeti</span>
            <h2 class="section-title" id="musteri-baslik" style="color:var(--color-white);">İş Ortaklarımız Ne Diyor?</h2>
            <p class="section-desc" style="color:rgba(255,255,255,.8);">Saha operasyonlarımızdaki disiplin, güvenlik standartları ve zamanlama başarımız hakkında görüşler.</p>
        </div>
        <div class="ref-reviews-grid">
            <?php foreach ($musteri_yorumlari as $rev): ?>
            <article class="ref-review-card">
                <div class="ref-review-top">
                    <div class="ref-review-stars-wrap">
                        <div class="ref-review-stars" aria-label="5 yıldız">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbf24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbf24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbf24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbf24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#fbbf24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <span class="ref-review-score">5.0</span>
                    </div>
                    <svg class="ref-card-quote" width="30" height="30" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>

                <p class="ref-review-text">"<?= htmlspecialchars($rev['yorum']) ?>"</p>

                <div class="ref-reviewer">
                    <div class="ref-reviewer-avatar" style="background-color: <?= $rev['avatar_bg'] ?>;">
                        <?= $rev['avatar_text'] ?>
                    </div>
                    <div class="ref-reviewer-details">
                        <div class="ref-reviewer-name"><?= htmlspecialchars($rev['isim']) ?></div>
                        <div class="ref-reviewer-role"><?= htmlspecialchars($rev['unvan']) ?></div>
                        <div class="ref-reviewer-location"><?= render_icon('pin', '', 12) ?> <?= htmlspecialchars($rev['lokasyon']) ?></div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-banner-content">
            <h2>Projenizde Tekinler Grup Güvencesini Yaşayın</h2>
            <p>Balıkesir, Soma, Akhisar, Bandırma veya Manisa'da vinç kiralama ve ağır kaldırma ihtiyaçlarınız için hemen teklif alın.</p>
            <div class="cta-banner-btns">
                <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-secondary btn-xl" id="ref-tel-btn"><?= FIRMA_TELEFON ?></a>
                <a href="/iletisim" class="btn btn-outline-dark btn-xl">Ücretsiz Keşif & Teklif</a>
            </div>
        </div>
    </div>
</section>

<!-- Basit ve Hızlı Kategori Filtreleme Scripti -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.ref-filter-btn');
    const cards = document.querySelectorAll('.ref-company-card');

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter || (filter === 'enerji' && (category === 'enerji' || category === 'maden'))) {
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
