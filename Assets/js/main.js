/* ═══════════════════════════════════════════════════════════════════════════
   SCV MARCHOVELETTE — main.js
   ═══════════════════════════════════════════════════════════════════════════ */

(function () {
  'use strict';

  /* ── LOADER ────────────────────────────────────────────────────────────── */
  const loader = document.getElementById('loader');
  if (loader) {
    window.addEventListener('load', function () {
      setTimeout(function () {
        loader.classList.add('is-hidden');
      }, 400);
    });
  }

  /* ── HEADER SCROLL ─────────────────────────────────────────────────────── */
  const header = document.getElementById('header');
  if (header) {
    const onScroll = function () {
      header.classList.toggle('is-scrolled', window.scrollY > 20);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── MOBILE BURGER ─────────────────────────────────────────────────────── */
  const burger    = document.getElementById('burger');
  const navMobile = document.getElementById('navMobile');
  if (burger && navMobile) {
    burger.addEventListener('click', function () {
      const isOpen = burger.classList.toggle('is-open');
      navMobile.classList.toggle('is-open', isOpen);
      burger.setAttribute('aria-expanded', String(isOpen));
      navMobile.setAttribute('aria-hidden', String(!isOpen));
    });
    // Close on link click
    navMobile.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        burger.classList.remove('is-open');
        navMobile.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
        navMobile.setAttribute('aria-hidden', 'true');
      });
    });
    // Close on outside click
    document.addEventListener('click', function (e) {
      if (!header.contains(e.target)) {
        burger.classList.remove('is-open');
        navMobile.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
        navMobile.setAttribute('aria-hidden', 'true');
      }
    });
  }

  /* ── REVEAL ON SCROLL ──────────────────────────────────────────────────── */
  const reveals = document.querySelectorAll('.reveal');
  if (reveals.length && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    reveals.forEach(function (el) {
      revealObserver.observe(el);
    });
  } else {
    // Fallback: show all immediately
    reveals.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ── COUNTER ANIMATION ─────────────────────────────────────────────────── */
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCount(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    counters.forEach(function (el) { counterObserver.observe(el); });
  }

  function animateCount(el) {
    const target   = parseInt(el.getAttribute('data-count'), 10);
    const duration = 1400;
    let   start    = null;
    const easeOut  = function (t) { return 1 - Math.pow(1 - t, 3); };

    function step(timestamp) {
      if (!start) start = timestamp;
      var progress = Math.min((timestamp - start) / duration, 1);
      el.textContent = Math.round(easeOut(progress) * target);
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  /* ── RIDER FILTER ──────────────────────────────────────────────────────── */
  const filterBtns = document.querySelectorAll('.filter-btn');
  const ridersGrid = document.getElementById('ridersGrid');
  if (filterBtns.length && ridersGrid) {
    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterBtns.forEach(function (b) { b.classList.remove('filter-btn--active'); });
        btn.classList.add('filter-btn--active');

        const filter = btn.getAttribute('data-filter');
        const cards  = ridersGrid.querySelectorAll('.rider-card');
        cards.forEach(function (card) {
          const cat = card.getAttribute('data-categorie');
          const visible = filter === 'all' || cat === filter;
          card.style.display = visible ? '' : 'none';
        });
      });
    });
  }

  /* ── BAND DUPLICATE (ticker) ───────────────────────────────────────────── */
  const track = document.querySelector('.band__track');
  if (track) {
    // duplicate content so it scrolls seamlessly
    track.innerHTML += track.innerHTML;
  }

})();
