<header class="banner bg-white shadow-md py-4">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center">
      <a class="brand flex items-center" href="{{ home_url('/') }}">
        <img src="{{ get_theme_file_uri('resources/images/grind-logo.png') }}" alt="{{ $siteName }}" class="h-12 mr-3" onerror="this.src='{{ get_theme_file_uri('resources/images/grind-logo-placeholder.png') }}'; this.onerror=null;">
        <span class="text-2xl font-secondary text-primary font-bold">{!! $siteName !!}</span>
      </a>

      <!-- Mobile menu button -->
      <button class="menu-toggle md:hidden flex items-center">
        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>

      <!-- Desktop Navigation -->
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary hidden md:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex space-x-6 text-primary font-medium',
            'echo' => false,
            'li_class' => 'hover:text-secondary transition-colors duration-300',
            'link_class' => 'py-2'
          ]) !!}
        </nav>
      @endif

      <!-- Shopping cart icon -->
      @if (function_exists('WC'))
        <div class="hidden md:flex items-center ml-6">
          <a href="{{ wc_get_cart_url() }}" class="relative text-primary hover:text-secondary transition-colors duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <span class="absolute -top-2 -right-2 bg-secondary text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">
              {{ WC()->cart->get_cart_contents_count() }}
            </span>
          </a>
        </div>
      @endif
    </div>
  </div>

  <!-- Mobile Navigation -->
  <div class="mobile-menu hidden bg-white w-full py-4 shadow-md">
    <div class="container mx-auto px-4">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex flex-col space-y-3 text-primary',
          'echo' => false,
          'li_class' => 'hover:text-secondary transition-colors duration-300',
          'link_class' => 'block py-2'
        ]) !!}
      @endif

      @if (function_exists('WC'))
        <div class="mt-4 pt-4 border-t border-gray-200">
          <a href="{{ wc_get_cart_url() }}" class="flex items-center text-primary hover:text-secondary transition-colors duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <span>Cart ({{ WC()->cart->get_cart_contents_count() }})</span>
          </a>
        </div>
      @endif
    </div>
  </div>
</header>
