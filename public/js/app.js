/* =========================================================
   TST WHITE HOUSE — MAIN JAVASCRIPT
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* ── NAVBAR SCROLL EFFECT ── */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    /* ── MOBILE HAMBURGER ── */
    const hamburger = document.getElementById('hamburger');
    const navLinks  = document.getElementById('navLinks');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            navLinks.classList.toggle('open');
        });

        // Close nav on link click
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('open');
                navLinks.classList.remove('open');
            });
        });

        // Mobile dropdown toggle
        document.querySelectorAll('.has-dropdown').forEach(item => {
            const link = item.querySelector(':scope > a');
            link.addEventListener('click', function (e) {
                if (window.innerWidth <= 700) {
                    e.preventDefault();
                    item.classList.toggle('open');
                }
            });
        });
    }

    /* ── FADE-UP INTERSECTION OBSERVER ── */
    const fadeEls = document.querySelectorAll('.fade-up');
    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, i * 80);
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        fadeEls.forEach(el => io.observe(el));
    } else {
        // Fallback for old browsers
        fadeEls.forEach(el => el.classList.add('visible'));
    }

    /* ── SMOOTH SCROLL FOR ANCHOR LINKS ── */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = 80; // navbar height
                const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    /* ── ACTIVE NAV LINK ON SCROLL ── */
    const sections = document.querySelectorAll('section[id]');
    const navAnchors = document.querySelectorAll('.nav-links a');

    function setActiveNav() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            if (window.pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });
        navAnchors.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href').includes(current) && current) {
                a.classList.add('active');
            }
        });
    }

    if (sections.length > 0) {
        window.addEventListener('scroll', setActiveNav);
    }

    /* ── CONTACT FORM VALIDATION ── */
    const form = document.querySelector('.contact-form-panel form');
    if (form) {
        form.addEventListener('submit', function(e) {
            let valid = true;
            const required = form.querySelectorAll('[required]');
            required.forEach(input => {
                input.classList.remove('input-error');
                if (!input.value.trim()) {
                    input.classList.add('input-error');
                    valid = false;
                }
            });

            const emailInput = form.querySelector('[type="email"]');
            if (emailInput && emailInput.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                emailInput.classList.add('input-error');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
                form.querySelector('.input-error')?.focus();
            }
        });

        // Remove error on input
        form.querySelectorAll('input, textarea').forEach(el => {
            el.addEventListener('input', () => el.classList.remove('input-error'));
        });
    }

    /* ── NAVBAR RESIZE RESET ── */
    window.addEventListener('resize', () => {
        if (window.innerWidth > 700 && navLinks) {
            navLinks.classList.remove('open');
            if (hamburger) hamburger.classList.remove('open');
        }
    });

});
