

// ── THEME TOGGLE ──
const html = document.documentElement;
const btn  = document.getElementById('themeToggle');
const icon = document.getElementById('themeIcon');

const MOON = `<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" fill="currentColor"/>`;
const SUN  = `<circle cx="10" cy="10" r="4" fill="currentColor"/><path d="M10 2v2M10 16v2M2 10h2M16 10h2M4.22 4.22l1.42 1.42M14.36 14.36l1.42 1.42M4.22 15.78l1.42-1.42M14.36 5.64l1.42-1.42" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>`;

btn?.addEventListener('click', () => {
  const dark = html.getAttribute('data-theme') === 'dark';
  html.setAttribute('data-theme', dark ? 'light' : 'dark');
  icon.innerHTML = dark ? MOON : SUN;
});

// ── MOBILE NAV ──
document.getElementById('hamburger')?.addEventListener('click', () => {
  document.getElementById('navItems')?.classList.toggle('open');
});

// ── SEARCH ──
const searchTrigger  = document.getElementById('searchTrigger');
const searchExpanded = document.getElementById('searchExpanded');
const searchInput    = document.getElementById('searchInput');

searchTrigger?.addEventListener('click', () => {
  const isOpen = searchExpanded.classList.toggle('open');
  if (isOpen) {
    searchTrigger.style.display = 'none';
    setTimeout(() => searchInput.focus(), 50);
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && searchExpanded?.classList.contains('open')) {
    searchExpanded.classList.remove('open');
    searchTrigger.style.display = '';
    searchInput.value = '';
  }
});

document.addEventListener('click', (e) => {
  if (!e.target.closest('.util-search') && searchExpanded?.classList.contains('open')) {
    searchExpanded.classList.remove('open');
    searchTrigger.style.display = '';
  }
});
