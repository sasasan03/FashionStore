document.addEventListener('DOMContentLoaded', () => {
  const nav = document.getElementById('headerNav');
  const btn = nav?.querySelector('.hamburger');
  const overlay = document.getElementById('menuOverlay');
  const closeBtn = nav?.querySelector('.menu-close');

  if (!nav || !btn) return;

  const mq = window.matchMedia('(max-width: 1139px)');
  const isMobile = () => mq.matches;

  const closeMenu = () => {
    nav.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
  };

  btn.addEventListener('click', () => {
    if (!isMobile()) return;
    const open = nav.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });

  overlay?.addEventListener('click', closeMenu);
  closeBtn?.addEventListener('click', closeMenu);

  window.addEventListener('resize', () => {
    if (isMobile()) return;
    closeMenu();
  });
});