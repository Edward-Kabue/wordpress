import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Import WOW.js for animations
import 'wowjs/dist/wow.min.js';

// Load Font Awesome
const loadFontAwesome = () => {
  const fontAwesomeLink = document.createElement('link');
  fontAwesomeLink.rel = 'stylesheet';
  fontAwesomeLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
  document.head.appendChild(fontAwesomeLink);
};

// Initialize WOW.js
document.addEventListener('DOMContentLoaded', function() {
  // Load Font Awesome
  loadFontAwesome();

  // Initialize WOW.js
  new WOW().init();

  // Magic Cursor
  const createMagicCursor = () => {
    // Create cursor elements
    const cursor = document.createElement('div');
    cursor.classList.add('magic-cursor');
    document.body.appendChild(cursor);

    const cursorDot = document.createElement('div');
    cursorDot.classList.add('magic-cursor-dot');
    document.body.appendChild(cursorDot);

    // Track mouse movement
    document.addEventListener('mousemove', (e) => {
      cursor.style.left = e.clientX + 'px';
      cursor.style.top = e.clientY + 'px';

      cursorDot.style.left = e.clientX + 'px';
      cursorDot.style.top = e.clientY + 'px';
    });

    // Add hover effect for links and buttons
    window.handleHover = (e) => {
      cursor.style.width = '50px';
      cursor.style.height = '50px';
      cursor.style.borderColor = 'var(--color-accent)';
    };

    window.handleLeave = (e) => {
      cursor.style.width = '30px';
      cursor.style.height = '30px';
      cursor.style.borderColor = 'var(--color-secondary)';
    };

    // Add event listeners to all links and buttons
    const links = document.querySelectorAll('a, button, .btn, .woocommerce-loop-product__link, .nav-item');
    links.forEach(link => {
      link.addEventListener('mouseenter', window.handleHover);
      link.addEventListener('mouseleave', window.handleLeave);
    });
  };

  // Only initialize magic cursor on desktop
  if (window.innerWidth > 768) {
    createMagicCursor();
  }

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

  // Add animation classes to elements
  const addAnimationClasses = () => {
    // Hero section elements
    document.querySelectorAll('.hero-title').forEach(el => {
      el.classList.add('wow', 'fadeInUp');
    });

    document.querySelectorAll('.hero-subtitle').forEach(el => {
      el.classList.add('wow', 'fadeInUp');
      el.setAttribute('data-wow-delay', '0.2s');
    });

    document.querySelectorAll('.hero-content .btn-primary').forEach(el => {
      el.classList.add('wow', 'fadeInUp');
      el.setAttribute('data-wow-delay', '0.4s');
    });

    // Section titles
    document.querySelectorAll('.section-title').forEach(el => {
      el.classList.add('wow', 'fadeInUp');
    });

    // Coffee cards
    document.querySelectorAll('.coffee-card').forEach((el, index) => {
      el.classList.add('wow', 'fadeInUp');
      el.setAttribute('data-wow-delay', `${0.1 * index}s`);
    });

    // Testimonials
    document.querySelectorAll('.testimonial').forEach((el, index) => {
      el.classList.add('wow', 'fadeInUp');
      el.setAttribute('data-wow-delay', `${0.1 * index}s`);
    });

    // Header elements
    document.querySelectorAll('.header-info').forEach((el, index) => {
      el.classList.add('wow', 'fadeInDown');
      el.setAttribute('data-wow-delay', `${0.1 * index}s`);
    });

    document.querySelectorAll('.top-header-right a').forEach((el, index) => {
      el.classList.add('wow', 'fadeInDown');
      el.setAttribute('data-wow-delay', `${0.2 + (0.1 * index)}s`);
    });

    document.querySelector('.logo')?.classList.add('wow', 'fadeInLeft');
    document.querySelector('.nav-primary')?.classList.add('wow', 'fadeIn');
    document.querySelector('.header-right')?.classList.add('wow', 'fadeInRight');
  };

  addAnimationClasses();

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
