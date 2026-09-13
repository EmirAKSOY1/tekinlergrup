<?php
/**
 * Tekinler Grup Vinç — Yardımcı Fonksiyonlar
 */

// ============================================================
// META / SEO YARDIMCILARI
// ============================================================

/**
 * Sayfa meta verilerini üret (title, description, canonical, OG, Twitter Card)
 *
 * @param array $meta [title, description, canonical, og_image, og_type, noindex]
 */
function render_meta(array $meta): string {
    $site_name  = SITE_NAME;
    $title      = htmlspecialchars($meta['title'] ?? SITE_NAME, ENT_QUOTES);
    $desc       = htmlspecialchars($meta['description'] ?? '', ENT_QUOTES);
    $canonical  = htmlspecialchars($meta['canonical'] ?? (SITE_URL . $_SERVER['REQUEST_URI']), ENT_QUOTES);
    $og_image   = htmlspecialchars($meta['og_image'] ?? OG_DEFAULT_IMAGE, ENT_QUOTES);
    $og_type    = htmlspecialchars($meta['og_type'] ?? 'website', ENT_QUOTES);
    $noindex    = !empty($meta['noindex']);

    $html  = "    <title>{$title}</title>\n";
    $html .= "    <meta name=\"description\" content=\"{$desc}\">\n";
    $html .= "    <link rel=\"canonical\" href=\"{$canonical}\">\n";

    if ($noindex) {
        $html .= "    <meta name=\"robots\" content=\"noindex, nofollow\">\n";
    } else {
        $html .= "    <meta name=\"robots\" content=\"index, follow\">\n";
    }

    // Open Graph
    $html .= "    <meta property=\"og:type\" content=\"{$og_type}\">\n";
    $html .= "    <meta property=\"og:title\" content=\"{$title}\">\n";
    $html .= "    <meta property=\"og:description\" content=\"{$desc}\">\n";
    $html .= "    <meta property=\"og:url\" content=\"{$canonical}\">\n";
    $html .= "    <meta property=\"og:image\" content=\"{$og_image}\">\n";
    $html .= "    <meta property=\"og:site_name\" content=\"{$site_name}\">\n";
    $html .= "    <meta property=\"og:locale\" content=\"tr_TR\">\n";

    // Twitter Card
    $html .= "    <meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    $html .= "    <meta name=\"twitter:title\" content=\"{$title}\">\n";
    $html .= "    <meta name=\"twitter:description\" content=\"{$desc}\">\n";
    $html .= "    <meta name=\"twitter:image\" content=\"{$og_image}\">\n";

    return $html;
}

// ============================================================
// SCHEMA.ORG YAPILARI
// ============================================================

/**
 * LocalBusiness schema üret
 */
function schema_local_business(): string {
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'LocalBusiness',
        'name'            => FIRMA_AD,
        'url'             => SITE_URL,
        'telephone'       => FIRMA_TELEFON,
        'email'           => FIRMA_EMAIL,
        'logo'            => SITE_LOGO,
        'image'           => OG_DEFAULT_IMAGE,
        'address'         => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => FIRMA_ADRES,
            'addressLocality' => FIRMA_SEHIR,
            'postalCode'      => FIRMA_POSTA,
            'addressCountry'  => FIRMA_ULKE,
        ],
        'openingHours'    => [
            'Mo-Fr 08:00-18:00',
            'Sa 09:00-14:00',
        ],
        'areaServed'      => [
            ['@type' => 'City', 'name' => 'Balıkesir'],
            ['@type' => 'City', 'name' => 'Edremit'],
            ['@type' => 'City', 'name' => 'Bandırma'],
        ],
        'description'     => SITE_TAGLINE,
        'priceRange'      => '₺₺',
        'sameAs'          => array_filter([FIRMA_INSTAGRAM, FIRMA_FACEBOOK, FIRMA_YOUTUBE]),
    ];
    return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

/**
 * WebSite schema (sitelinks searchbox)
 */
function schema_website(): string {
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        'name'     => SITE_NAME,
        'url'      => SITE_URL,
        'potentialAction' => [
            '@type'       => 'SearchAction',
            'target'      => SITE_URL . '/blog?q={search_term_string}',
            'query-input' => 'required name=search_term_string',
        ],
    ];
    return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

/**
 * Service schema
 */
function schema_service(string $name, string $description, string $url): string {
    $schema = [
        '@context'     => 'https://schema.org',
        '@type'        => 'Service',
        'name'         => $name,
        'description'  => $description,
        'url'          => SITE_URL . $url,
        'provider'     => [
            '@type' => 'LocalBusiness',
            'name'  => FIRMA_AD,
            'url'   => SITE_URL,
        ],
        'areaServed'   => [
            '@type' => 'City',
            'name'  => 'Balıkesir',
        ],
        'serviceType'  => $name,
    ];
    return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

/**
 * FAQPage schema
 */
function schema_faq(array $faqItems): string {
    $entities = [];
    foreach ($faqItems as $item) {
        $entities[] = [
            '@type'          => 'Question',
            'name'           => $item['soru'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $item['cevap'],
            ],
        ];
    }
    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $entities,
    ];
    return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

/**
 * BreadcrumbList schema
 */
function schema_breadcrumb(array $items): string {
    $elements = [];
    foreach ($items as $i => $item) {
        $elements[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['name'],
            'item'     => $item['url'],
        ];
    }
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $elements,
    ];
    return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

// ============================================================
// BREADCRUMB HTML
// ============================================================

/**
 * HTML breadcrumb çıktısı
 * @param array $items [{name, url}]
 */
function render_breadcrumb(array $items): string {
    $html = '<nav class="breadcrumb" aria-label="Breadcrumb"><ol itemscope itemtype="https://schema.org/BreadcrumbList">';
    foreach ($items as $i => $item) {
        $isLast = ($i === count($items) - 1);
        $pos = $i + 1;
        $name = htmlspecialchars($item['name'], ENT_QUOTES);
        $url  = htmlspecialchars($item['url'], ENT_QUOTES);
        $html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        if (!$isLast) {
            $html .= "<a itemprop=\"item\" href=\"{$url}\"><span itemprop=\"name\">{$name}</span></a>";
            $html .= '<span class="breadcrumb-sep">›</span>';
        } else {
            $html .= "<span itemprop=\"name\">{$name}</span>";
        }
        $html .= "<meta itemprop=\"position\" content=\"{$pos}\">";
        $html .= '</li>';
    }
    $html .= '</ol></nav>';
    return $html;
}

// ============================================================
// GÜVENLİK YARDIMCILARI
// ============================================================

function clean(string $str): string {
    return htmlspecialchars(strip_tags(trim($str)), ENT_QUOTES, 'UTF-8');
}

function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validate_phone(string $phone): bool {
    $clean = preg_replace('/[^0-9]/', '', $phone);
    return strlen($clean) >= 10 && strlen($clean) <= 15;
}

// ============================================================
// CSRF TOKEN
// ============================================================

function generate_csrf(): string {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf(string $token): bool {
    if (session_status() === PHP_SESSION_NONE) session_start();
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// ============================================================
// RATE LIMITING (basit dosya tabanlı)
// ============================================================

function check_rate_limit(string $key, int $max = 5, int $window = 300): bool {
    $file = sys_get_temp_dir() . '/tgv_rl_' . md5($key) . '.json';
    $now  = time();
    $data = [];

    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true) ?? [];
    }

    // Eski kayıtları temizle
    $data = array_filter($data, fn($ts) => ($now - $ts) < $window);

    if (count($data) >= $max) {
        return false; // Limit aşıldı
    }

    $data[] = $now;
    file_put_contents($file, json_encode(array_values($data)));
    return true;
}

// ============================================================
// AKTIF NAV YARDIMCISI
// ============================================================

function is_active(string $path): string {
    $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ($path === '/' && $current === '/') return 'active';
    if ($path !== '/' && str_starts_with($current, $path)) return 'active';
    return '';
}

// ============================================================
// ENDÜSTRİYEL VE KURUMSAL SVG İKON MOTORU
// ============================================================

/**
 * Emojiler yerine yüksek kaliteli, ölçeklenebilir ve kurumsal SVG ikon döndürür.
 *
 * @param string $name  İkon anahtarı (örn: 'basket-crane', 'crane', 'shield', vb.)
 * @param string $class Ekstra CSS sınıfları
 * @param int    $size  Genişlik/yükseklik pikseli
 * @return string       SVG HTML çıktısı
 */
function render_icon(string $name, string $class = '', int $size = 24): string {
    $cls = 'svg-icon' . ($class ? ' ' . htmlspecialchars($class, ENT_QUOTES) : '');
    $s   = (int)$size;
    $base = "class=\"{$cls}\" width=\"{$s}\" height=\"{$s}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"";

    switch ($name) {
        // 1. Sepetli Vinç / Personel Yükseltici Platform (Cherry Picker)
        case 'basket-crane':
        case 'icon-basket-crane':
        case 'sepetli-vinc':
        case 'sepet':
            return "<svg {$base}>
                <rect x=\"13\" y=\"2\" width=\"9\" height=\"7\" rx=\"1.5\"/>
                <line x1=\"13\" y1=\"5\" x2=\"22\" y2=\"5\"/>
                <line x1=\"17.5\" y1=\"2\" x2=\"17.5\" y2=\"9\"/>
                <path d=\"M15 9l-4 5-5-2\"/>
                <path d=\"M6 14l-4 3\"/>
                <path d=\"M2 17h11v2H2z\"/>
                <circle cx=\"5\" cy=\"20\" r=\"1.5\"/>
                <circle cx=\"10\" cy=\"20\" r=\"1.5\"/>
                <line x1=\"13\" y1=\"19\" x2=\"15\" y2=\"22\"/>
            </svg>";

        // 2. Vinç Kiralama / Teleskopik Vinç & Kanca
        case 'crane':
        case 'icon-crane':
        case 'vinc-kiralama':
        case 'vinc':
            return "<svg {$base}>
                <path d=\"M3 21h18\"/>
                <path d=\"M5 21V5l11-2v6\"/>
                <path d=\"M5 10l11-4\"/>
                <path d=\"M5 16l8-3\"/>
                <line x1=\"16\" y1=\"9\" x2=\"16\" y2=\"15\" stroke-dasharray=\"1.5 1.5\"/>
                <path d=\"M14 15h4v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-2z\" fill=\"currentColor\" fill-opacity=\"0.15\"/>
                <path d=\"M16 19c-1.5 0-2 1-2 2s1 2 2 2 2-1 2-2\"/>
            </svg>";

        // 3. Mobil Vinç (Ağır Hizmet Kamyon Üstü Teleskopik Vinç)
        case 'mobile-crane':
        case 'icon-mobile-crane':
        case 'mobil-vinc':
            return "<svg {$base}>
                <path d=\"M2 17h16v-4H9L4 9H2v8z\"/>
                <path d=\"M9 13L19 4\"/>
                <line x1=\"19\" y1=\"4\" x2=\"22\" y2=\"4\"/>
                <line x1=\"19\" y1=\"4\" x2=\"19\" y2=\"11\" stroke-dasharray=\"2 2\"/>
                <circle cx=\"19\" cy=\"12\" r=\"1.5\" fill=\"currentColor\"/>
                <circle cx=\"5\" cy=\"18\" r=\"2\"/>
                <circle cx=\"10\" cy=\"18\" r=\"2\"/>
                <circle cx=\"15\" cy=\"18\" r=\"2\"/>
                <path d=\"M18 17h4v-3h-4\"/>
            </svg>";

        // 4. Ağır Yük Kaldırma (Ağır Sanayi Makara & Tonaj Bloğu)
        case 'heavy-lift':
        case 'icon-heavy-lift':
        case 'agir-yuk':
        case 'agir-yuk-kaldirma':
            return "<svg {$base}>
                <circle cx=\"12\" cy=\"6\" r=\"4\"/>
                <line x1=\"12\" y1=\"2\" x2=\"12\" y2=\"6\"/>
                <path d=\"M9 10l-3 8h12l-3-8\"/>
                <line x1=\"6\" y1=\"18\" x2=\"18\" y2=\"18\"/>
                <path d=\"M12 18v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2\"/>
                <line x1=\"4\" y1=\"22\" x2=\"20\" y2=\"22\" stroke-width=\"2.5\"/>
            </svg>";

        // 5. Oto Kurtarma (Kayar Kasa Kurtarıcı Araç)
        case 'car-rescue':
        case 'icon-car-rescue':
        case 'oto-kurtarma':
            return "<svg {$base}>
                <path d=\"M2 18h16v-4H8L4 10H2v8z\"/>
                <path d=\"M8 14L19 9\"/>
                <circle cx=\"5\" cy=\"19\" r=\"2\"/>
                <circle cx=\"15\" cy=\"19\" r=\"2\"/>
                <path d=\"M14 7h6l2 3v4h-8z\" fill=\"currentColor\" fill-opacity=\"0.1\"/>
                <circle cx=\"19\" cy=\"14\" r=\"1.5\"/>
                <line x1=\"10\" y1=\"4\" x2=\"10\" y2=\"8\"/>
            </svg>";

        // 6. Çekici (Ağır Ticari Çekici Vinç)
        case 'tow-truck':
        case 'icon-tow-truck':
        case 'cekici':
            return "<svg {$base}>
                <path d=\"M3 17h14v-4H9L5 9H3v8z\"/>
                <circle cx=\"6\" cy=\"18\" r=\"2\"/>
                <circle cx=\"14\" cy=\"18\" r=\"2\"/>
                <path d=\"M14 13l6-5v4\"/>
                <path d=\"M20 12l2 2\"/>
                <path d=\"M17 17h5v-2h-5\"/>
            </svg>";

        // 7. Kule / Tesis / Fabrika
        case 'tower-crane':
        case 'icon-tower-crane':
        case 'building':
        case 'fabrika':
            return "<svg {$base}>
                <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\"/>
                <path d=\"M3 9h18M9 21V9\"/>
                <circle cx=\"6\" cy=\"6\" r=\"1\" fill=\"currentColor\"/>
                <circle cx=\"6\" cy=\"12\" r=\"1\" fill=\"currentColor\"/>
                <circle cx=\"6\" cy=\"16\" r=\"1\" fill=\"currentColor\"/>
            </svg>";

        // 8. İş Güvenliği & Sertifikasyon (Kalkan)
        case 'shield':
        case 'guvenlik':
        case 'is-guvenligi':
            return "<svg {$base}>
                <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/>
                <path d=\"M9 12l2 2 4-4\" stroke-width=\"2.5\"/>
            </svg>";

        // 9. Hızlı Operasyon / Enerji / 7-24 (Şimşek)
        case 'flash':
        case 'bolt':
        case 'hizli':
        case 'enerji':
            return "<svg {$base}>
                <polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\" fill=\"currentColor\" fill-opacity=\"0.15\"/>
            </svg>";

        // 10. Uzman Personel / Mühendis / Operatör (Baret & Kişi)
        case 'worker':
        case 'operator':
        case 'uzman':
            return "<svg {$base}>
                <path d=\"M12 2a5 5 0 0 0-5 5v1h10V7a5 5 0 0 0-5-5z\" fill=\"currentColor\" fill-opacity=\"0.15\"/>
                <line x1=\"6\" y1=\"8\" x2=\"18\" y2=\"8\" stroke-width=\"2.5\"/>
                <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                <path d=\"M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2\"/>
            </svg>";

        // 11. Konum / Lokasyon (Harita İğnesi)
        case 'pin':
        case 'map-pin':
        case 'lokasyon':
        case 'bolge':
            return "<svg {$base}>
                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\" fill=\"currentColor\" fill-opacity=\"0.15\"/>
                <circle cx=\"12\" cy=\"10\" r=\"3\" fill=\"currentColor\"/>
            </svg>";

        // 12. Güvenilir İş Ortaklığı (El Sıkışma)
        case 'handshake':
        case 'ortaklik':
        case 'memnuniyet':
            return "<svg {$base}>
                <path d=\"M11 15h2\"/>
                <path d=\"M7 11l5-5 5 5-2 2-3-3-3 3-2-2z\" fill=\"currentColor\" fill-opacity=\"0.15\"/>
                <path d=\"M3 15l4-4 4 4-2 2-3-3-3 3z\"/>
                <path d=\"M17 11l4 4-3 3-3-3 2-2z\"/>
                <path d=\"M2 19l3 3h14l3-3\"/>
            </svg>";

        // 13. Liman & Denizcilik
        case 'port':
        case 'liman':
        case 'ship':
            return "<svg {$base}>
                <circle cx=\"12\" cy=\"5\" r=\"3\"/>
                <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"21\"/>
                <path d=\"M5 12H2a10 10 0 0 0 20 0h-3\"/>
            </svg>";

        // 14. Telefon
        case 'phone':
        case 'telefon':
            return "<svg {$base}>
                <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/>
            </svg>";

        // 15. WhatsApp / Mesaj
        case 'whatsapp':
        case 'chat':
        case 'mesaj':
            return "<svg {$base}>
                <path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"/>
            </svg>";

        // 16. Takvim / Tarih
        case 'calendar':
        case 'tarih':
        case 'yil':
            return "<svg {$base}>
                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
            </svg>";

        // 17. İpucu / Fikir
        case 'lightbulb':
        case 'fikir':
        case 'bilgi':
            return "<svg {$base}>
                <path d=\"M9 18h6M10 22h4\"/>
                <path d=\"M15.09 14c.18-.98.65-1.74 1.41-2.5A6 6 0 1 0 7.5 11.5c.76.76 1.23 1.52 1.41 2.5h6.18z\" fill=\"currentColor\" fill-opacity=\"0.15\"/>
            </svg>";

        // 18. Fiyat / Bütçe / Finans
        case 'money':
        case 'fiyat':
        case 'tag':
            return "<svg {$base}>
                <path d=\"M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z\"/>
                <line x1=\"7\" y1=\"7\" x2=\"7.01\" y2=\"7\" stroke-width=\"3\"/>
            </svg>";

        // 19. Klasör / Kategori
        case 'folder':
        case 'kategori':
            return "<svg {$base}>
                <path d=\"M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z\"/>
            </svg>";

        // 20. Kullanıcı / Yazar
        case 'user':
        case 'yazar':
            return "<svg {$base}>
                <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                <circle cx=\"12\" cy=\"7\" r=\"4\"/>
            </svg>";

        // 21. Saat / 7-24
        case 'clock':
        case 'saat':
            return "<svg {$base}>
                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                <polyline points=\"12 6 12 12 16 14\"/>
            </svg>";

        // 22. Bakım / Tamir / Anahtar
        case 'wrench':
        case 'tamir':
        case 'bakim':
        default:
            return "<svg {$base}>
                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"/>
            </svg>";
    }
}
