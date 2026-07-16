(function () {
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.site-nav-toggle');
  const nav = document.querySelector('.site-nav');
  const links = document.querySelectorAll('.site-nav__link[href^="#"]');
  const sections = [...links]
    .map((a) => document.querySelector(a.getAttribute('href')))
    .filter(Boolean);

  function closeNav() {
    document.body.classList.remove('site-nav-open');
    if (toggle) toggle.setAttribute('aria-expanded', 'false');
  }

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const open = document.body.classList.toggle('site-nav-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    nav.querySelectorAll('a').forEach((a) => a.addEventListener('click', closeNav));
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeNav();
    });
  }

  function onScroll() {
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 8);

    const y = window.scrollY + (header?.offsetHeight || 72) + 24;
    let current = sections[0]?.id || '';
    for (const sec of sections) {
      if (sec.offsetTop <= y) current = sec.id;
    }
    links.forEach((a) => {
      a.classList.toggle('is-active', a.getAttribute('href') === `#${current}`);
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
