<!-- Header inspired by Roast theme -->
<header class="header-area">
  <!-- Top Header Area -->
  <div class="top-header bg-primary text-white py-2">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
        <div class="top-header-left flex items-center">
          <div class="header-info mr-6">
            <i class="fas fa-map-marker-alt mr-2"></i>
            <span>123 Coffee Street, Brewville</span>
          </div>
          <div class="header-info">
            <i class="fas fa-envelope mr-2"></i>
            <span>info@grindcoffee.com</span>
          </div>
        </div>
        <div class="top-header-right flex items-center space-x-4">
          <a href="#" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="text-white hover:text-secondary transition-colors duration-300">
            <i class="fab fa-pinterest-p"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Header Area -->
  <div class="main-header bg-white py-4 shadow-md">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <div class="logo">
          <a class="brand flex items-center" href="{{ home_url('/') }}">
            <img src="{{ get_theme_file_uri('resources/images/grind-logo.png') }}" alt="{{ $siteName }}" class="h-16 mr-3" onerror="this.src='{{ get_theme_file_uri('resources/images/grind-logo-placeholder.png') }}'; this.onerror=null;">
            <span class="text-2xl font-secondary text-primary font-bold">{!! $siteName !!}</span>
          </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:block">
          @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'flex space-x-8 text-primary font-medium',
                'echo' => false,
                'li_class' => 'nav-item relative group',
                'link_class' => 'py-2 font-medium text-lg hover:text-secondary transition-colors duration-300 relative after:content-[""] after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-secondary after:transition-all after:duration-300 hover:after:w-full'
              ]) !!}
            </nav>
          @endif
        </div>

        <!-- Header Right Icons -->
        <div class="header-right flex items-center space-x-6">
          <!-- Search Icon -->
          <div class="search-icon">
            <a href="#" class="text-primary hover:text-secondary transition-colors duration-300" id="search-toggle">
              <i class="fas fa-search text-xl"></i>
            </a>
          </div>

          <!-- Shopping Cart -->
          @if (function_exists('WC'))
            <div class="cart-icon">
              <a href="{{ wc_get_cart_url() }}" class="relative text-primary hover:text-secondary transition-colors duration-300">
                <i class="fas fa-shopping-bag text-xl"></i>
                <span class="absolute -top-2 -right-2 bg-secondary text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">
                  {{ WC()->cart->get_cart_contents_count() }}
                </span>
              </a>
            </div>
          @endif

          <!-- Mobile Menu Toggle -->
          <div class="lg:hidden">
            <button class="menu-toggle text-primary hover:text-secondary transition-colors duration-300">
              <i class="fas fa-bars text-2xl"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Search Form Popup -->
  <div id="search-form-popup" class="search-form-popup fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center">
    <div class="search-form-container bg-white p-8 rounded-lg w-full max-w-2xl mx-4">
      <div class="flex justify-between items-center mb-6">
        <h3 class="text-2xl font-secondary text-primary">Search</h3>
        <button id="search-close" class="text-primary hover:text-secondary">
          <i class="fas fa-times text-xl"></i>
        </button>
      </div>
      <form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
        <div class="flex">
          <input type="search" class="w-full border border-gray-300 p-4 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Search..." value="{{ get_search_query() }}" name="s">
          <button type="submit" class="bg-secondary text-white px-6 rounded-r-lg hover:bg-primary transition-colors duration-300">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Mobile Navigation -->
  <div class="mobile-menu fixed inset-0 bg-black bg-opacity-80 z-50 hidden">
    <div class="mobile-menu-container bg-white h-full w-80 max-w-full overflow-y-auto transform transition-transform duration-300 translate-x-0">
      <div class="mobile-menu-header p-4 flex justify-between items-center border-b border-gray-200">
        <div class="logo">
          <a href="{{ home_url('/') }}" class="text-xl font-secondary text-primary font-bold">{!! $siteName !!}</a>
        </div>
        <button class="mobile-menu-close text-primary hover:text-secondary">
          <i class="fas fa-times text-xl"></i>
        </button>
      </div>
      <div class="mobile-menu-content p-4">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'mobile-nav flex flex-col space-y-3',
            'echo' => false,
            'li_class' => 'border-b border-gray-100 pb-2',
            'link_class' => 'block py-2 text-primary hover:text-secondary transition-colors duration-300'
          ]) !!}
        @endif

        @if (function_exists('WC'))
          <div class="mt-6">
            <a href="{{ wc_get_cart_url() }}" class="flex items-center text-primary hover:text-secondary transition-colors duration-300">
              <i class="fas fa-shopping-bag mr-2"></i>
              <span>Cart ({{ WC()->cart->get_cart_contents_count() }})</span>
            </a>
          </div>
        @endif

        <div class="mobile-social-links mt-6 flex space-x-4">
          <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition-colors duration-300">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition-colors duration-300">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition-colors duration-300">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-secondary transition-colors duration-300">
            <i class="fab fa-pinterest-p"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Add Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Header Scripts -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
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
    }

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');

    if (menuToggle && mobileMenu && mobileMenuClose) {
      menuToggle.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('block');
        mobileMenu.querySelector('.mobile-menu-container').classList.remove('translate-x-0');
        mobileMenu.querySelector('.mobile-menu-container').classList.add('translate-x-0');
      });

      mobileMenuClose.addEventListener('click', function() {
        mobileMenu.classList.remove('block');
        mobileMenu.classList.add('hidden');
      });
    }
  });
</script>
