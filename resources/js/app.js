import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Import WOW.js for animations
import 'wowjs/dist/wow.min.js';

// Initialize WOW.js
document.addEventListener('DOMContentLoaded', function() {
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
    const handleHover = (e) => {
      cursor.style.width = '50px';
      cursor.style.height = '50px';
      cursor.style.borderColor = 'var(--color-accent)';
    };

    const handleLeave = (e) => {
      cursor.style.width = '30px';
      cursor.style.height = '30px';
      cursor.style.borderColor = 'var(--color-secondary)';
    };

    // Add event listeners to all links and buttons
    const links = document.querySelectorAll('a, button, .btn, .woocommerce-loop-product__link');
    links.forEach(link => {
      link.addEventListener('mouseenter', handleHover);
      link.addEventListener('mouseleave', handleLeave);
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

  // Mobile menu toggle
  const menuToggle = document.querySelector('.menu-toggle');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('active');
      menuToggle.classList.toggle('active');
    });
  }

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
  };

  addAnimationClasses();
});
