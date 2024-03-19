document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  const headerLogo = header.querySelector('.logo img');
  console.log(header);

  function isHeaderHidden(header) {
    if (!header) return;
    const headerRect = header.getBoundingClientRect();
    const headerHeight = headerRect.height;
    const distanceToTop = window.scrollY;
    headerLogo.src = '../img/logo-sticky.svg';
    return distanceToTop > (headerHeight + 20)
  }

  function handleScroll() {
    if (isHeaderHidden(header)) {
      header.classList.add('header__sticky');
    } else {
      header.classList.remove('header__sticky');
      headerLogo.src = '../img/logo.svg';
    }
  }

  window.addEventListener('scroll', handleScroll);

  function blockBody() {
    document.documentElement.style.paddingRight = window.innerWidth - document.body.offsetWidth + 'px';
    document.documentElement.style.overflow = 'hidden';
  }

  function unblockBody() {
    document.documentElement.style.paddingRight = 0;
    document.documentElement.style.overflow = 'auto';
  }

  function openMobileMeny(burgerMenu, menu) {
    if (!burgerMenu) return;
    if (!burgerMenu.classList.contains('open')) {
      burgerMenu.classList.add('open');
      menu.classList.add('nav_open');
      blockBody();
    } else {
      burgerMenu.classList.remove('open');
      menu.classList.remove('nav_open');
      unblockBody();
    }
  }

  const burgerMenu = document.querySelector('.animated-icon');
  const menu = document.querySelector('nav');

  burgerMenu.addEventListener('click', () => {
    openMobileMeny(burgerMenu, menu);
  });
});
