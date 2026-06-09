function filterFormations(btn, cat) {
  document.querySelectorAll('.ftab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.formation-card').forEach(card => {
    if (cat === 'all' || card.dataset.cat === cat) {
      card.style.display = '';
      card.style.opacity = '0';
      card.style.transform = 'translateY(12px)';
      setTimeout(() => {
        card.style.transition = 'opacity 0.35s, transform 0.35s';
        card.style.opacity = '1';
        card.style.transform = 'none';
      }, 30);
    } else {
      card.style.display = 'none';
    }
  });
}
const revealEls = document.querySelectorAll('.news-card,.formation-card,.lab-card,.event-card,.temoignage-card,.emploi-card,.dest-card,.adm-step,.vie-item,.stat-item');
const ro = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
      ro.unobserve(entry.target);
    }
  });
}, { threshold: 0.08 });
revealEls.forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(18px)';
  ro.observe(el);
});