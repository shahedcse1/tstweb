/**
 * hero-slider.js
 * Self-contained slider for .hero-slider / #heroSlider
 * Features: auto-play, touch swipe, keyboard nav, dot sync, progress bar.
 */
(function () {
    'use strict';

    const slider   = document.getElementById('heroSlider');
    if (!slider) return;

    const track    = document.getElementById('hsTrack');
    const dots     = document.querySelectorAll('.hs-dot');
    const prevBtn  = document.getElementById('hsPrev');
    const nextBtn  = document.getElementById('hsNext');
    const slides   = track.querySelectorAll('.hs-slide');
    const total    = slides.length;

    // ── Progress bar ─────────────────────────────────────────
    const bar = document.createElement('div');
    bar.className = 'hs-progress';
    slider.appendChild(bar);

    // ── State ─────────────────────────────────────────────────
    let current   = 0;
    let autoTimer = null;
    const AUTO_DELAY = 5000; // ms between auto-advances

    // ── Core: go to a specific slide ─────────────────────────
    function goTo(index, direction) {
        // wrap
        index = ((index % total) + total) % total;
        current = index;

        // Move track
        track.style.transform = `translateX(-${current * 100}%)`;

        // Update dots
        dots.forEach((d, i) => {
            d.classList.toggle('active', i === current);
            d.setAttribute('aria-selected', i === current ? 'true' : 'false');
        });

        // Reset progress bar
        bar.style.transition = 'none';
        bar.style.width = '0%';
        // Force reflow then animate
        bar.getBoundingClientRect();
        bar.style.transition = `width ${AUTO_DELAY}ms linear`;
        bar.style.width = '100%';
    }

    // ── Auto-play ─────────────────────────────────────────────
    function startAuto() {
        clearInterval(autoTimer);
        autoTimer = setInterval(() => goTo(current + 1), AUTO_DELAY);
    }

    function stopAuto() {
        clearInterval(autoTimer);
        // Stop progress bar where it is
        const computed = getComputedStyle(bar).width;
        bar.style.transition = 'none';
        bar.style.width = computed;
    }

    function resumeAuto() {
        goTo(current); // restart bar from 0 for current slide
        startAuto();
    }

    // ── Button listeners ──────────────────────────────────────
    prevBtn?.addEventListener('click', () => {
        stopAuto();
        goTo(current - 1);
        startAuto();
    });

    nextBtn?.addEventListener('click', () => {
        stopAuto();
        goTo(current + 1);
        startAuto();
    });

    // ── Dot listeners ─────────────────────────────────────────
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            stopAuto();
            goTo(parseInt(dot.dataset.index, 10));
            startAuto();
        });
    });

    // ── Keyboard navigation ───────────────────────────────────
    slider.setAttribute('tabindex', '0');
    slider.addEventListener('keydown', e => {
        if (e.key === 'ArrowLeft')  { stopAuto(); goTo(current - 1); startAuto(); }
        if (e.key === 'ArrowRight') { stopAuto(); goTo(current + 1); startAuto(); }
    });

    // ── Touch / swipe ─────────────────────────────────────────
    let touchStartX = 0;
    let touchStartY = 0;
    let isDragging  = false;

    slider.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
        isDragging  = true;
        stopAuto();
    }, { passive: true });

    slider.addEventListener('touchmove', e => {
        if (!isDragging) return;
        const dx = e.touches[0].clientX - touchStartX;
        const dy = e.touches[0].clientY - touchStartY;
        // If mostly horizontal drag — prevent page scroll
        if (Math.abs(dx) > Math.abs(dy)) e.preventDefault();
    }, { passive: false });

    slider.addEventListener('touchend', e => {
        if (!isDragging) return;
        isDragging = false;
        const dx = e.changedTouches[0].clientX - touchStartX;
        if (Math.abs(dx) > 48) {          // threshold = 48 px
            goTo(dx < 0 ? current + 1 : current - 1);
        }
        startAuto();
    }, { passive: true });

    // ── Mouse drag (desktop) ──────────────────────────────────
    let mouseStartX = 0;
    let mouseDown   = false;

    slider.addEventListener('mousedown', e => {
        mouseStartX = e.clientX;
        mouseDown   = true;
        stopAuto();
        slider.style.cursor = 'grabbing';
    });

    window.addEventListener('mousemove', e => {
        if (!mouseDown) return;
        e.preventDefault();
    });

    window.addEventListener('mouseup', e => {
        if (!mouseDown) return;
        mouseDown = false;
        slider.style.cursor = '';
        const dx = e.clientX - mouseStartX;
        if (Math.abs(dx) > 48) {
            goTo(dx < 0 ? current + 1 : current - 1);
        }
        startAuto();
    });

    // ── Pause on hover ────────────────────────────────────────
    slider.addEventListener('mouseenter', stopAuto);
    slider.addEventListener('mouseleave', resumeAuto);

    // ── Pause when tab is hidden ──────────────────────────────
    document.addEventListener('visibilitychange', () => {
        document.hidden ? stopAuto() : resumeAuto();
    });

    // ── Boot ─────────────────────────────────────────────────
    goTo(0);
    startAuto();

})();


/*
  PATCH for hero-slider.js
  In your existing goTo() function, add the two lines marked ADD after
  the track.style.transform line:
*/

function goTo(index, direction) {
    index = ((index % total) + total) % total;
    current = index;

    track.style.transform = `translateX(-${current * 100}%)`;

    // ADD: mark active slide for CSS zoom effect
    slides.forEach((s, i) => s.classList.toggle('is-active', i === current));

    dots.forEach((d, i) => {
        d.classList.toggle('active', i === current);
        d.setAttribute('aria-selected', i === current ? 'true' : 'false');
    });

    bar.style.transition = 'none';
    bar.style.width = '0%';
    bar.getBoundingClientRect();
    bar.style.transition = `width ${AUTO_DELAY}ms linear`;
    bar.style.width = '100%';
}
