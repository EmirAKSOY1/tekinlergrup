<?php
/**
 * Tekinler Grup Vinç — Footer (Alt Bölüm)
 */
?>
</main>
<!-- ====== MAIN CONTENT END ====== -->

<!-- ====== FOOTER ====== -->
<footer class="site-footer" aria-label="Site Altbilgisi">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">

                <!-- Firma Bilgileri -->
                <div class="footer-col footer-brand">
                    <a href="/" class="footer-logo" aria-label="<?= SITE_NAME ?> Ana Sayfa">
                        <span class="logo-icon">
                            <svg width="36" height="36" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <rect width="40" height="40" rx="8" fill="#f59e0b"/>
                                <path d="M8 32V12L20 6L32 12V32" stroke="#1a2540" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 6V32" stroke="#1a2540" stroke-width="2" stroke-linecap="round"/>
                                <path d="M8 18L32 18" stroke="#1a2540" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="20" cy="6" r="2.5" fill="#1a2540"/>
                                <path d="M20 6L28 3" stroke="#1a2540" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="28" cy="3" r="1.5" fill="#1a2540"/>
                            </svg>
                        </span>
                        <span class="logo-text">
                            <span class="logo-brand">Tekinler Grup</span>
                            <span class="logo-sub">Vinç</span>
                        </span>
                    </a>
                    <p class="footer-desc">
                        Balıkesir ve çevresinde vinç kiralama, kaldırma-taşıma, oto kurtarma ve çekici hizmetleri sunan güvenilir iş ortağınız.
                    </p>
                    <div class="footer-contact-info">
                        <a href="tel:<?= FIRMA_TELEFON ?>" class="footer-contact-link" id="footer-tel-btn">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.05 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                            <?= FIRMA_TELEFON ?>
                        </a>
                        <a href="https://wa.me/<?= FIRMA_WHATSAPP ?>" class="footer-contact-link footer-wa-link" id="footer-wa-btn" target="_blank" rel="noopener">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WhatsApp ile Yazın
                        </a>
                        <a href="mailto:<?= FIRMA_EMAIL ?>" class="footer-contact-link">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <?= FIRMA_EMAIL ?>
                        </a>
                    </div>

                    <!-- Sosyal Medya -->
                    <div class="social-links">
                        <?php if (FIRMA_INSTAGRAM): ?>
                        <a href="<?= FIRMA_INSTAGRAM ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if (FIRMA_FACEBOOK): ?>
                        <a href="<?= FIRMA_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Hizmetler -->
                <nav class="footer-col" aria-label="Hizmetler">
                    <h3 class="footer-title">Hizmetlerimiz</h3>
                    <ul class="footer-links" role="list">
                        <li><a href="/hizmetler/vinc-kiralama">Vinç Kiralama</a></li>
                        <li><a href="/hizmetler/mobil-vinc">Mobil Vinç</a></li>
                        <li><a href="/hizmetler/sepetli-vinc">Sepetli Vinç</a></li>
                        <li><a href="/hizmetler/agir-yuk-kaldirma">Ağır Yük Kaldırma</a></li>
                        <li><a href="/hizmetler/oto-kurtarma">Oto Kurtarma</a></li>
                        <li><a href="/hizmetler/cekici">Çekici</a></li>
                    </ul>
                </nav>

                <!-- Hizmet Bölgeleri -->
                <nav class="footer-col" aria-label="Hizmet Bölgeleri">
                    <h3 class="footer-title">Hizmet Bölgeleri</h3>
                    <ul class="footer-links footer-links-sm" role="list">
                        <li><a href="/">Balıkesir Merkez</a></li>
                        <li><a href="/">Altıeylül</a></li>
                        <li><a href="/">Karesi</a></li>
                        <li><a href="/">Edremit</a></li>
                        <li><a href="/">Bandırma</a></li>
                        <li><a href="/">Gönen</a></li>
                        <li><a href="/">Ayvalık</a></li>
                        <li><a href="/">Burhaniye</a></li>
                        <li><a href="/">Erdek</a></li>
                        <li><a href="/">Susurluk</a></li>
                        <li><a href="/">Soma</a></li>
                        <li><a href="/">Akhisar</a></li>
                        <li><a href="/">Balya</a></li>
                        <li><a href="/">Manisa</a></li>
                    </ul>
                </nav>

                <!-- Hızlı Linkler -->
                <nav class="footer-col" aria-label="Kurumsal">
                    <h3 class="footer-title">Kurumsal</h3>
                    <ul class="footer-links" role="list">
                        <li><a href="/hakkimizda">Hakkımızda</a></li>
                        <li><a href="/referanslar">Referanslar</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/iletisim">İletişim</a></li>
                        <li><a href="/iletisim">Teklif Al</a></li>
                    </ul>
                    <h3 class="footer-title" style="margin-top:24px;">Çalışma Saatleri</h3>
                    <ul class="footer-hours" role="list">
                        <li><?= FIRMA_SAAT_HFT ?></li>
                        <li><?= FIRMA_SAAT_CMT ?></li>
                        <li><?= FIRMA_SAAT_PAZ ?></li>
                        <li class="highlight-saat"><?= FIRMA_OTO_SAAT ?></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p class="footer-copy">
                    &copy; <?= date('Y') ?> <?= SITE_NAME ?>. Tüm hakları saklıdır.
                    <span>Balıkesir'de Güvenilir Vinç Hizmeti</span>
                </p>
                <nav class="footer-legal" aria-label="Yasal Bağlantılar">
                    <a href="/gizlilik-politikasi">Gizlilik Politikası</a>
                    <a href="/kvkk">KVKK</a>
                    <a href="/cerez-politikasi">Çerez Politikası</a>
                    <a href="/kullanim-kosullari">Kullanım Koşulları</a>
                </nav>
            </div>
        </div>
    </div>
</footer>

<!-- ====== JAVASCRIPT ====== -->
<script src="/assets/js/main.js" defer></script>

</body>
</html>
