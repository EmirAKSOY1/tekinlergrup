/**
 * Tekinler Grup Vinç — Ana JavaScript
 * Minimal JS: Performans odaklı, SEO'yu etkilemeyen
 */

(function () {
    'use strict';

    // ================================================================
    // 1. HAMBURGEr MENÜ
    // ================================================================
    const hamburger = document.getElementById('hamburger');
    const mainNav   = document.getElementById('main-nav');

    if (hamburger && mainNav) {
        hamburger.addEventListener('click', function () {
            const isOpen = document.body.classList.toggle('mobile-nav-open');
            hamburger.classList.toggle('open', isOpen);
            hamburger.setAttribute('aria-expanded', isOpen.toString());
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Dışarı tıklayınca kapat
        document.addEventListener('click', function (e) {
            if (!hamburger.contains(e.target) && !mainNav.contains(e.target)) {
                if (document.body.classList.contains('mobile-nav-open')) {
                    document.body.classList.remove('mobile-nav-open');
                    hamburger.classList.remove('open');
                    hamburger.setAttribute('aria-expanded', 'false');
                    document.body.style.overflow = '';
                }
            }
        });

        // ESC tuşuyla kapat
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && document.body.classList.contains('mobile-nav-open')) {
                document.body.classList.remove('mobile-nav-open');
                hamburger.classList.remove('open');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
                hamburger.focus();
            }
        });
    }

    // ================================================================
    // 2. HEADER SCROLL EFEKTİ
    // ================================================================
    const header = document.getElementById('site-header');
    if (header) {
        let lastScroll = 0;
        window.addEventListener('scroll', function () {
            const currentScroll = window.scrollY;
            if (currentScroll > 80) {
                header.style.boxShadow = '0 2px 30px rgba(0,0,0,.4)';
            } else {
                header.style.boxShadow = '';
            }
            lastScroll = currentScroll;
        }, { passive: true });
    }

    // ================================================================
    // 3. FAQ ACCORDION
    // ================================================================
    document.querySelectorAll('.faq-question').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const item = this.closest('.faq-item');
            const isOpen = item.classList.contains('open');

            // Diğerlerini kapat
            document.querySelectorAll('.faq-item.open').forEach(function (openItem) {
                if (openItem !== item) {
                    openItem.classList.remove('open');
                    const otherBtn = openItem.querySelector('.faq-question');
                    if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                }
            });

            item.classList.toggle('open', !isOpen);
            this.setAttribute('aria-expanded', (!isOpen).toString());
        });
    });

    // İlk FAQ açık başlasın
    const firstFaq = document.querySelector('.faq-item');
    if (firstFaq) {
        firstFaq.classList.add('open');
        const firstBtn = firstFaq.querySelector('.faq-question');
        if (firstBtn) firstBtn.setAttribute('aria-expanded', 'true');
    }

    // ================================================================
    // 4. İLETİŞİM FORMU (AJAX)
    // ================================================================
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async function (e) {
            e.preventDefault();

            const submitBtn  = this.querySelector('[type="submit"]');
            const alertEl    = document.getElementById('form-alert');
            const formData   = new FormData(this);

            // Honeypot kontrolü
            if (formData.get('website')) return;

            submitBtn.disabled = true;
            submitBtn.textContent = 'Gönderiliyor...';

            try {
                const response = await fetch('/ajax/contact.php', {
                    method: 'POST',
                    body: formData,
                });

                const result = await response.json();

                alertEl.className = 'form-alert ' + (result.success ? 'success' : 'error');
                alertEl.textContent = result.message;
                alertEl.style.display = 'block';

                if (result.success) {
                    contactForm.reset();
                    // GA4 event
                    if (typeof gtag === 'function') {
                        gtag('event', 'contact_form_submit', { event_category: 'Form' });
                    }
                    // Başarı mesajına scroll
                    alertEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }

            } catch (error) {
                alertEl.className = 'form-alert error';
                alertEl.textContent = 'Bir hata oluştu. Lütfen telefon veya WhatsApp ile iletişime geçin.';
                alertEl.style.display = 'block';
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Mesajı Gönder';
            }
        });
    }

    // ================================================================
    // 5. INTERSECTION OBSERVER — Lazy Animate
    // ================================================================
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1,
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-card, .why-card, .blog-card, .stat-card').forEach(function (el) {
            observer.observe(el);
        });
    }

    // ================================================================
    // 6. TEL/WA TIKLAMA TAKİBİ (GA4)
    // ================================================================
    document.querySelectorAll('a[href^="tel:"]').forEach(function (el) {
        el.addEventListener('click', function () {
            if (typeof gtag === 'function') {
                gtag('event', 'phone_click', {
                    event_category: 'CTA',
                    event_label: el.id || 'phone_link',
                });
            }
        });
    });

    document.querySelectorAll('a[href*="wa.me"]').forEach(function (el) {
        el.addEventListener('click', function () {
            if (typeof gtag === 'function') {
                gtag('event', 'whatsapp_click', {
                    event_category: 'CTA',
                    event_label: el.id || 'whatsapp_link',
                });
            }
        });
    });

    // ================================================================
    // 7. SMOOTH SCROLL (anchor links)
    // ================================================================
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const headerH = document.getElementById('site-header')?.offsetHeight || 72;
                const top = target.getBoundingClientRect().top + window.pageYOffset - headerH - 16;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    // ================================================================
    // 8. ÇEREZ BİLDİRİMİ
    // ================================================================
    if (!localStorage.getItem('tgv_cookie_ok')) {
        const cookieBanner = document.createElement('div');
        cookieBanner.id = 'cookie-banner';
        cookieBanner.setAttribute('role', 'dialog');
        cookieBanner.setAttribute('aria-label', 'Çerez Bildirimi');
        cookieBanner.innerHTML = `
            <p>Bu web sitesi deneyiminizi iyileştirmek için çerezler kullanmaktadır.
            <a href="/cerez-politikasi">Çerez Politikası</a></p>
            <div>
                <button id="cookie-accept" class="btn btn-primary btn-sm">Kabul Et</button>
                <button id="cookie-decline" class="btn btn-outline-dark btn-sm">Reddet</button>
            </div>
        `;
        cookieBanner.style.cssText = `
            position: fixed; bottom: 70px; left: 0; right: 0; z-index: 950;
            background: #fff; border-top: 3px solid #f59e0b;
            padding: 16px 24px; display: flex; flex-wrap: wrap;
            gap: 12px; align-items: center; justify-content: space-between;
            box-shadow: 0 -4px 20px rgba(0,0,0,.1); font-size: 14px;
            color: #374151;
        `;

        document.body.appendChild(cookieBanner);

        document.getElementById('cookie-accept')?.addEventListener('click', function () {
            localStorage.setItem('tgv_cookie_ok', '1');
            cookieBanner.remove();
        });

        document.getElementById('cookie-decline')?.addEventListener('click', function () {
            localStorage.setItem('tgv_cookie_ok', '0');
            cookieBanner.remove();
        });
    }

    // Cookie banner bottom: mobil bar yoksa
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner && window.innerWidth >= 768) {
        cookieBanner.style.bottom = '0';
    }

})();
