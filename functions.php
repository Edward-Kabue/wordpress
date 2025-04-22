<?php
if (!defined('ABSPATH')) exit;

function roast_coffee_setup() {
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('woocommerce');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'roast_coffee_setup');

function roast_coffee_styles() {
    // Register main stylesheet
    wp_enqueue_style(
        'roast-coffee-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Register custom.css
    wp_enqueue_style(
        'roast-coffee-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'roast_coffee_styles');

// WooCommerce specific setup
function roast_coffee_woocommerce_setup() {
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'roast_coffee_woocommerce_setup');

function roast_coffee_enqueue_scripts() {
    // Enqueue Swiper
    wp_enqueue_style(
        'swiper-css',
        'https://unpkg.com/swiper/swiper-bundle.min.css',
        array(),
        '8.0.0'
    );
    
    wp_enqueue_script(
        'swiper-js',
        'https://unpkg.com/swiper/swiper-bundle.min.js',
        array(),
        '8.0.0',
        true
    );

    // Enqueue GSAP
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js',
        array(),
        '3.11.4',
        true
    );

    // Enqueue SplitText
    wp_enqueue_script(
        'split-text',
        get_template_directory_uri() . '/assets/js/SplitText.min.js',
        array('gsap'),
        '3.11.4',
        true
    );

    // Enqueue WOW.js
    wp_enqueue_style(
        'animate-css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        array(),
        '4.1.1'
    );

    wp_enqueue_script(
        'wow-js',
        'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
        array(),
        '1.1.2',
        true
    );

    // Enqueue custom slider script
    wp_enqueue_script(
        'roast-coffee-slider',
        get_template_directory_uri() . '/assets/js/slider.js',
        array('swiper-js', 'gsap', 'split-text', 'wow-js'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'roast_coffee_enqueue_scripts');

function roast_register_block_patterns() {
    // Register pattern category
    register_block_pattern_category(
        'roast',
        array('label' => __('Roast Coffee Shop', 'roast-coffee'))
    );

    // Debug: Check if files exist and content is loaded
    $hero_file = get_template_directory() . '/patterns/hero.php';
    $home_sections_file = get_template_directory() . '/patterns/home-sections.php';
    
    error_log('Hero file exists: ' . (file_exists($hero_file) ? 'yes' : 'no'));
    error_log('Home sections file exists: ' . (file_exists($home_sections_file) ? 'yes' : 'no'));

    // Get pattern contents
    $hero_content = file_exists($hero_file) ? file_get_contents($hero_file) : '';
    $home_sections_content = file_exists($home_sections_file) ? file_get_contents($home_sections_file) : '';

    error_log('Hero content length: ' . strlen($hero_content));
    error_log('Home sections content length: ' . strlen($home_sections_content));

    // Register Hero Pattern
    register_block_pattern(
        'roast/hero',
        array(
            'title'       => __('Hero Section', 'roast-coffee'),
            'categories'  => array('roast'),
            'description' => __('A hero section with background image and text overlay', 'roast-coffee'),
            'content'     => $hero_content,
        )
    );

    // Register Home Sections Pattern
    register_block_pattern(
        'roast/home-sections',
        array(
            'title'       => __('Home Sections', 'roast-coffee'),
            'categories'  => array('roast'),
            'description' => __('Various sections for the home page including ticker and intro video', 'roast-coffee'),
            'content'     => $home_sections_content,
        )
    );
}
add_action('init', 'roast_register_block_patterns');

function roast_scripts() {
    // Your existing enqueues...

    wp_add_inline_style('roast-custom', '
        .our-scrolling-ticker {
            background-color: #C8B6A6;
            padding: 15px 0;
            overflow: hidden;
            width: 100%;
            margin: 0;
        }

        .scrolling-ticker-box {
            --gap: 20px;
            position: relative;
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: var(--gap);
            width: 100%;
        }

        .scrolling-content {
            flex-shrink: 0;
            display: flex;
            gap: var(--gap);
            min-width: 100%;
            animation: scroll 30s linear infinite;
            padding-left: var(--gap);
        }

        /* Add second instance for continuous scroll */
        .scrolling-ticker-box .scrolling-content:nth-child(2) {
            animation: scroll2 30s linear infinite;
            animation-delay: -15s;
        }

        .ticker-item {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
            color: #1A120B;
        }

        .ticker-item .asterisk {
            font-size: 24px;
            line-height: 1;
            color: #1A120B;
        }

        .ticker-item p {
            font-family: "Forum", serif;
            font-size: 20px;
            line-height: 1;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: 1px;
            color: #1A120B;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        @keyframes scroll2 {
            0% { transform: translateX(100%); }
            100% { transform: translateX(0); }
        }

        /* Pause animation on hover */
        .scrolling-ticker-box:hover .scrolling-content {
            animation-play-state: paused;
        }

        @media (prefers-reduced-motion: reduce) {
            .scrolling-content {
                animation: none;
            }
        }
    ');
}
add_action("wp_enqueue_scripts", "roast_scripts");

function coffee_ticker_shortcode() {
    // Debug output
    error_log('Coffee ticker shortcode is being called');
    
    $coffee_items = array(
        'Espresso',
        'Americano',
        'Latte',
        'Cappuccino',
        'Mocha',
        'Macchiato',
        'Cold Brew'
    );
    
    ob_start();
    ?>
    <!-- Start of ticker -->
    <div class="scrolling-ticker-box" style="border: 1px solid red;">
        <div class="scrolling-content">
            <?php foreach ($coffee_items as $item) : ?>
            <div class="ticker-item">
                <span class="asterisk">*</span>
                <p><?php echo esc_html($item); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="scrolling-content">
            <?php foreach ($coffee_items as $item) : ?>
            <div class="ticker-item">
                <span class="asterisk">*</span>
                <p><?php echo esc_html($item); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End of ticker -->
    <?php
    $output = ob_get_clean();
    error_log('Ticker output: ' . substr($output, 0, 100) . '...');
    return $output;
}
add_shortcode('coffee_ticker', 'coffee_ticker_shortcode');

// Add this to test if the shortcode is registered
add_action('init', function() {
    error_log('Registered shortcodes: ' . print_r(array_keys($GLOBALS['shortcode_tags']), true));
});

// Add necessary scripts and styles
function roast_coffee_enqueue_assets() {
    // Enqueue the main stylesheet
    wp_enqueue_style(
        'roast-coffee-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        '5.1.3'
    );

    // Enqueue custom styles
    wp_enqueue_style(
        'roast-coffee-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array('bootstrap'),
        wp_get_theme()->get('Version')
    );

    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JS
    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.1.3',
        true
    );

    // Enqueue custom scripts
    wp_enqueue_script(
        'roast-coffee-functions',
        get_template_directory_uri() . '/assets/js/function.js',
        array('jquery', 'bootstrap'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'roast_coffee_enqueue_assets');

// Add theme support
function roast_coffee_theme_support() {
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('html5', array('navigation-widgets'));
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'roast_coffee_theme_support');

function roast_coffee_register_template_parts() {
    // Register footer template part
    $footer_content = file_get_contents(get_template_directory() . '/parts/footer.html');
    
    if ($footer_content === false) {
        error_log('Failed to read footer.html content');
        return;
    }

    register_block_pattern(
        'roast-coffee/footer',
        array(
            'title'       => __('Footer', 'roast-coffee'),
            'categories'  => array('footer'),
            'content'     => $footer_content,
        )
    );

    // Register the template part directly
    wp_register_template_part(
        array(
            'slug'  => 'footer',
            'title' => __('Footer', 'roast-coffee'),
            'area'  => 'footer',
        ) 
    );
}
add_action('init', 'roast_coffee_register_template_parts');


function roast_coffee_validate_html_content($content) {
    // Basic HTML validation
    $content = preg_replace('/<figure([^>]*)>/', '<figure$1></figure>', $content);
    return $content;
}
add_filter('the_content', 'roast_coffee_validate_html_content');

function register_why_choose_item_block() {
    register_block_type('roast-coffee/why-choose-item', array(
        'render_callback' => 'render_why_choose_item',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => ''
            ),
            'description' => array(
                'type' => 'string',
                'default' => ''
            )
        )
    ));
}
add_action('init', 'register_why_choose_item_block');

function render_why_choose_item($attributes) {
    $title = isset($attributes['title']) ? $attributes['title'] : '';
    $description = isset($attributes['description']) ? $attributes['description'] : '';
    
    ob_start(); ?>
    <div class="wp-block-group why-choose-item-content">
        <h3><?= esc_html($title) ?></h3>
        <p><?= esc_html($description) ?></p>
    </div>
    <?php
    return ob_get_clean();
}

