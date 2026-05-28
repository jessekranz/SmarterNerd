/* SmarterNerd — interactions.js
   Scroll progress · Reveal on scroll · Typewriter · FAQ accordion
   No jQuery dependency. */

(function () {
  'use strict';

  /* ── Scroll progress reticle ── */
  const progressBar = document.createElement('div');
  progressBar.className = 'sn-scroll-progress';
  document.body.prepend(progressBar);

  window.addEventListener('scroll', function () {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    progressBar.style.height = pct + '%';
  }, { passive: true });

  /* ── IntersectionObserver reveal ── */
  const revealEls = document.querySelectorAll('.sn-reveal');
  if (revealEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    revealEls.forEach(function (el) { observer.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in-view'); });
  }

  /* ── Typewriter cycling ── */
  const typewriters = document.querySelectorAll('[data-typewriter]');
  typewriters.forEach(function (el) {
    const words = el.dataset.typewriter.split('|');
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let delay = 120;

    function type() {
      const currentWord = words[wordIndex % words.length];

      if (isDeleting) {
        el.textContent = currentWord.substring(0, charIndex - 1);
        charIndex--;
        delay = 60;
      } else {
        el.textContent = currentWord.substring(0, charIndex + 1);
        charIndex++;
        delay = 120;
      }

      if (!isDeleting && charIndex === currentWord.length) {
        delay = 2000;
        isDeleting = true;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex++;
        delay = 400;
      }

      setTimeout(type, delay);
    }

    if (words.length > 0) type();
  });

  /* ── FAQ accordion ── */
  document.querySelectorAll('.sn-faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const item = this.closest('.sn-faq-item');
      const isOpen = item.classList.contains('open');

      // Close all
      document.querySelectorAll('.sn-faq-item.open').forEach(function (i) {
        i.classList.remove('open');
        const ans = i.querySelector('.sn-faq-answer');
        if (ans) ans.style.maxHeight = null;
      });

      // Open clicked (unless it was already open)
      if (!isOpen) {
        item.classList.add('open');
        const ans = item.querySelector('.sn-faq-answer');
        if (ans) ans.style.maxHeight = ans.scrollHeight + 'px';
      }
    });
  });

  /* Ensure FAQ answers are closed by default */
  document.querySelectorAll('.sn-faq-answer').forEach(function (a) {
    a.style.maxHeight = null;
    a.style.overflow = 'hidden';
    a.style.transition = 'max-height 0.35s cubic-bezier(0.23, 1, 0.32, 1)';
  });

  /* ── Cipher decode on scroll ── */
  const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%';
  document.querySelectorAll('[data-cipher]').forEach(function (el) {
    const original = el.textContent;
    let decoded = false;

    const obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !decoded) {
          decoded = true;
          obs.unobserve(el);
          let iteration = 0;
          const interval = setInterval(function () {
            el.textContent = original
              .split('')
              .map(function (letter, i) {
                if (letter === ' ') return ' ';
                if (i < iteration) return original[i];
                return chars[Math.floor(Math.random() * chars.length)];
              })
              .join('');
            if (iteration >= original.length) clearInterval(interval);
            iteration += 1.5;
          }, 40);
        }
      });
    }, { threshold: 0.5 });

    obs.observe(el);
  });

})();
