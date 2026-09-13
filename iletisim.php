<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_meta = [
    'title'       => 'İletişim | Vinç Kiralama Teklif Al | Tekinler Grup Vinç Balıkesir',
    'description' => 'Balıkesir vinç kiralama, mobil vinç veya oto kurtarma hizmetleri için bizimle iletişime geçin. Telefon, WhatsApp veya form ile ücretsiz teklif alın.',
    'canonical'   => SITE_URL . '/iletisim',
    'schema'      => [schema_local_business()],
];

$breadcrumbs = [
    ['name' => 'Ana Sayfa', 'url' => SITE_URL . '/'],
    ['name' => 'İletişim',  'url' => SITE_URL . '/iletisim'],
];

include __DIR__ . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="İletişim Sayfa Başlığı">
    <div class="container">
        <div class="page-hero-content">
            <h1>İletişim</h1>
            <p>Vinç kiralama, oto kurtarma veya diğer hizmetlerimiz için bize ulaşın.<br>
            En kısa sürede size geri döneceğiz.</p>
        </div>
    </div>
</section>

<!-- İletişim Bölümü -->
<section class="section contact-section" aria-labelledby="iletisim-baslik">
    <div class="container">
        <div class="contact-grid">

            <!-- İletişim Bilgileri -->
            <aside>
                <div class="contact-info-card">
                    <h2 id="iletisim-baslik">Bize Ulaşın</h2>

                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                            </div>
                            <div class="contact-info-text">
                                <strong>Telefon</strong>
                                <a href="tel:<?= FIRMA_TELEFON ?>" id="contact-page-tel"><?= FIRMA_TELEFON ?></a>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </div>
                            <div class="contact-info-text">
                                <strong>WhatsApp</strong>
                                <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20bilgi%20almak%20istiyorum." target="_blank" rel="noopener" id="contact-page-wa">WhatsApp ile Yazın</a>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div class="contact-info-text">
                                <strong>E-posta</strong>
                                <a href="mailto:<?= FIRMA_EMAIL ?>"><?= FIRMA_EMAIL ?></a>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="contact-info-text">
                                <strong>Adres</strong>
                                <span style="color: rgba(255,255,255,.8);"><?= FIRMA_ADRES ?>, <?= FIRMA_SEHIR ?></span>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div class="contact-info-text">
                                <strong>Çalışma Saatleri</strong>
                                <span style="color: rgba(255,255,255,.8);">
                                    <?= FIRMA_SAAT_HFT ?><br>
                                    <?= FIRMA_SAAT_CMT ?><br>
                                    <?= FIRMA_SAAT_PAZ ?><br>
                                    <strong style="color: var(--color-accent);"><?= FIRMA_OTO_SAAT ?></strong>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick CTA -->
                    <a href="tel:<?= FIRMA_TELEFON ?>" class="btn btn-primary" style="width:100%; justify-content:center; margin-bottom: var(--spacing-3);" id="contact-cta-tel">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                        Hemen Ara — <?= FIRMA_TELEFON ?>
                    </a>
                    <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>?text=Merhaba%2C%20vinç%20hizmeti%20hakkında%20bilgi%20almak%20istiyorum." class="btn btn-whatsapp" style="width:100%; justify-content:center;" target="_blank" rel="noopener" id="contact-cta-wa">
                        WhatsApp ile Yazın
                    </a>
                </div>
            </aside>

            <!-- İletişim Formu -->
            <div class="contact-form-card">
                <h3>Teklif veya Bilgi Talebi</h3>
                <p style="color: var(--color-gray-500); margin-bottom: var(--spacing-6); font-size: var(--fs-sm);">
                    Formu doldurun, en kısa sürede sizi arayalım. Alanlar isteğe bağlıdır, ancak ne kadar çok bilgi verirseniz size o kadar hızlı yardımcı olabiliriz.
                </p>

                <form id="contact-form" method="POST" action="/ajax/contact.php" novalidate>
                    <!-- CSRF Token -->
                    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

                    <!-- Honeypot (spam koruması) -->
                    <div class="hp-field" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="ad">Ad Soyad <span style="color:#ef4444;" aria-hidden="true">*</span></label>
                            <input type="text" id="ad" name="ad" required autocomplete="name"
                                   placeholder="Adınız ve soyadınız">
                        </div>
                        <div class="form-group">
                            <label for="telefon">Telefon <span style="color:#ef4444;" aria-hidden="true">*</span></label>
                            <input type="tel" id="telefon" name="telefon" required autocomplete="tel"
                                   placeholder="05XX XXX XX XX">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">E-posta</label>
                        <input type="email" id="email" name="email" autocomplete="email"
                               placeholder="ornek@email.com">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="hizmet">Hizmet Türü <span style="color:#ef4444;" aria-hidden="true">*</span></label>
                            <select id="hizmet" name="hizmet" required>
                                <option value="" disabled selected>Hizmet seçin...</option>
                                <option value="Vinç Kiralama">Vinç Kiralama</option>
                                <option value="Mobil Vinç">Mobil Vinç</option>
                                <option value="Sepetli Vinç">Sepetli Vinç</option>
                                <option value="Kule Vinç">Kule Vinç</option>
                                <option value="Ağır Yük Kaldırma">Ağır Yük Kaldırma</option>
                                <option value="Oto Kurtarma">Oto Kurtarma</option>
                                <option value="Çekici">Çekici</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ilce">İlçe</label>
                            <select id="ilce" name="ilce">
                                <option value="" disabled selected>İlçe seçin...</option>
                                <option value="Balıkesir Merkez">Balıkesir Merkez</option>
                                <?php foreach ($hizmet_ilceleri as $ilce): ?>
                                <option value="<?= htmlspecialchars($ilce) ?>"><?= htmlspecialchars($ilce) ?></option>
                                <?php endforeach; ?>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mesaj">Mesajınız</label>
                        <textarea id="mesaj" name="mesaj" rows="5"
                                  placeholder="Projeniz veya talebiniz hakkında kısaca bilgi verin..."></textarea>
                    </div>

                    <!-- KVKK Onayı -->
                    <div class="form-group" style="display:flex; align-items:flex-start; gap:var(--spacing-2);">
                        <input type="checkbox" id="kvkk" name="kvkk" required
                               style="width:auto; margin-top:2px; flex-shrink:0;">
                        <label for="kvkk" style="font-size: var(--fs-sm); font-weight: 400; color: var(--color-gray-600); cursor: pointer;">
                            <a href="/kvkk" target="_blank" style="color: var(--color-accent);">KVKK Aydınlatma Metni</a>'ni
                            okudum ve kişisel verilerimin işlenmesine onay veriyorum. <span style="color:#ef4444;" aria-hidden="true">*</span>
                        </label>
                    </div>

                    <div id="form-alert" class="form-alert" role="alert" aria-live="polite"></div>

                    <button disabled type="submit" class="btn btn-primary btn-lg" style="width:100%; justify-content:center; margin-top: var(--spacing-2);" id="form-submit-btn">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        Mesajı Gönder (En kısa sürede aktifleşecek)
                    </button>
                </form>
            </div>
        </div>

        <!-- Google Maps -->
        <div style="margin-top: var(--spacing-12);">
            <h2 class="section-title text-center" style="margin-bottom: var(--spacing-6);">Konumumuz</h2>
            <div class="map-embed">
                <!-- Google Maps embed: FIRMA_MAPS_EMBED sabitini config.php'de gerçek embed URL ile güncelleyin -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.729911739691!2d27.907116375786725!3d39.63328477157632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b701a8b324b81d%3A0xa6087ea08672cc80!2zWWXEn2VubGVyIFZpbsOn!5e0!3m2!1str!2str!4v1789303279076!5m2!1str!2str"
                    width="600"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
