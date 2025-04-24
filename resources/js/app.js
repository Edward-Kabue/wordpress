import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Load Font Awesome
const loadFontAwesome = () => {
  const fontAwesomeLink = document.createElement('link');
  fontAwesomeLink.rel = 'stylesheet';
  fontAwesomeLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
  document.head.appendChild(fontAwesomeLink);
};

document.addEventListener('DOMContentLoaded', function() {
  // Load Font Awesome
  loadFontAwesome();

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 100,
          behavior: 'smooth'
        });
      }
    });
  });

  // Header functionality
  const setupHeader = () => {
    // Search Popup Toggle
    const searchToggle = document.getElementById('search-toggle');
    const searchPopup = document.getElementById('search-form-popup');
    const searchClose = document.getElementById('search-close');

    if (searchToggle && searchPopup && searchClose) {
      searchToggle.addEventListener('click', function(e) {
        e.preventDefault();
        searchPopup.classList.remove('hidden');
        searchPopup.classList.add('flex');
      });

      searchClose.addEventListener('click', function() {
        searchPopup.classList.remove('flex');
        searchPopup.classList.add('hidden');
      });

      // Close search popup when clicking outside
      searchPopup.addEventListener('click', function(e) {
        if (e.target === searchPopup) {
          searchPopup.classList.remove('flex');
          searchPopup.classList.add('hidden');
        }
      });
    }

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');

    if (menuToggle && mobileMenu && mobileMenuClose) {
      menuToggle.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('block');
      });

      mobileMenuClose.addEventListener('click', function() {
        mobileMenu.classList.remove('block');
        mobileMenu.classList.add('hidden');
      });

      // Close mobile menu when clicking outside
      mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
          mobileMenu.classList.remove('block');
          mobileMenu.classList.add('hidden');
        }
      });
    }

    // Sticky Header
    const mainHeader = document.querySelector('.main-header');
    if (mainHeader) {
      const headerHeight = mainHeader.offsetHeight;
      const topHeader = document.querySelector('.top-header');
      const topHeaderHeight = topHeader ? topHeader.offsetHeight : 0;

      window.addEventListener('scroll', function() {
        if (window.scrollY > topHeaderHeight) {
          mainHeader.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'z-40', 'shadow-md', 'animate-slideDown');
          document.body.style.paddingTop = `${headerHeight}px`;
        } else {
          mainHeader.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'z-40', 'shadow-md', 'animate-slideDown');
          document.body.style.paddingTop = '0';
        }
      });
    }

    // Dropdown menus for desktop navigation
    const navItems = document.querySelectorAll('.nav-item.menu-item-has-children');
    navItems.forEach(item => {
      const link = item.querySelector('a');
      const submenu = item.querySelector('.sub-menu');

      if (link && submenu) {
        // Add dropdown indicator
        const indicator = document.createElement('i');
        indicator.classList.add('fas', 'fa-chevron-down', 'ml-1', 'text-xs');
        link.appendChild(indicator);

        // Style submenu
        submenu.classList.add(
          'absolute', 'top-full', 'left-0', 'bg-white', 'shadow-md', 'rounded-md',
          'p-4', 'min-w-[200px]', 'z-50', 'hidden', 'group-hover:block',
          'transition-all', 'duration-300', 'opacity-0', 'group-hover:opacity-100',
          'translate-y-2', 'group-hover:translate-y-0'
        );

        // Style submenu items
        const submenuItems = submenu.querySelectorAll('li');
        submenuItems.forEach(subItem => {
          subItem.classList.add('mb-2', 'last:mb-0');
          const subLink = subItem.querySelector('a');
          if (subLink) {
            subLink.classList.add(
              'block', 'py-1', 'px-2', 'text-primary', 'hover:text-secondary',
              'transition-colors', 'duration-300', 'hover:bg-light', 'rounded'
            );
          }
        });
      }
    });
  };

  setupHeader();



  // Add CSS animations
  const addCSSAnimations = () => {
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideDown {
        from {
          transform: translateY(-100%);
          opacity: 0;
        }
        to {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .animate-slideDown {
        animation: slideDown 0.3s ease-in-out forwards;
      }
    `;
    document.head.appendChild(style);
  };

  addCSSAnimations();
});
