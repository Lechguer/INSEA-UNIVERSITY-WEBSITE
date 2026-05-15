/* ================================================================
   INSEA – FOOTER INTERACTIONS
   footer.js
   ================================================================ */

// ── CURSOR GLOW ──
const glow   = document.querySelector('.footer-glow');
const footer = document.getElementById('footer');

if (glow && footer) {
  footer.addEventListener('mousemove', e => {
    const rect = footer.getBoundingClientRect();
    requestAnimationFrame(() => {
      glow.style.left = (e.clientX - rect.left) + 'px';
      glow.style.top  = (e.clientY - rect.top)  + 'px';
    });
  });
}

// ── PARALLAX COLUMNS ──
if (footer) {
  footer.addEventListener('mousemove', e => {
    const x = (e.clientX / window.innerWidth  - 0.5);
    const y = (e.clientY / window.innerHeight - 0.5);

    document.querySelectorAll('.footer-col').forEach(el => {
      const depth = parseFloat(el.dataset.depth) || 0.2;
      el.style.transform = `translate(${x * depth * 25}px, ${y * depth * 25}px)`;
    });
  });

  footer.addEventListener('mouseleave', () => {
    document.querySelectorAll('.footer-col').forEach(el => {
      el.style.transform = '';
    });
  });
}

// ── SCROLL REVEAL ──
if (footer) {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) footer.classList.add('footer-visible');
    });
  }, { threshold: 0.1 });

  observer.observe(footer);
}

// ── NEWSLETTER (client-side fallback) ──
const form = document.getElementById('newsletterForm');
const msg  = document.getElementById('newsletterMsg');

form?.addEventListener('submit', e => {
  e.preventDefault();
  const email = form.querySelector('input[type="email"]').value;
  if (email) {
    msg.textContent = '✓ Merci ! Vous êtes maintenant abonné.';
    form.reset();
    setTimeout(() => { msg.textContent = ''; }, 4000);
  }
});

// ── LANGUAGE SYSTEM ──
const translations = {
  fr: { nav: 'Navigation', home: 'Accueil', programs: 'Formations', research: 'Recherche', resources: 'Ressources' },
  en: { nav: 'Navigation', home: 'Home',    programs: 'Programs',   research: 'Research',  resources: 'Resources'  }
};

function setLang(lang, el) {
  document.querySelectorAll('[data-i18n]').forEach(item => {
    const key = item.dataset.i18n;
    if (translations[lang][key]) item.textContent = translations[lang][key];
  });
  document.querySelectorAll('.footer-lang button').forEach(b => b.classList.remove('active'));
  if (el) el.classList.add('active');
}

// Expose globally for inline onclick
window.setLang = (lang) => {
  const btn = [...document.querySelectorAll('.footer-lang button')]
    .find(b => b.textContent.trim().toLowerCase() === lang);
  setLang(lang, btn);
};
