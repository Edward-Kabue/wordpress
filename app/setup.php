<?php

/**
 * Theme setup.
 */

namespace App;

use Illuminate\Support\Facades\Vite;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    // Dequeue WordPress core block styles to prevent conflicts
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    
    // Re-enqueue them properly
    wp_enqueue_style('wp-block-library');
    wp_enqueue_style('wp-block-library-theme');
    
    // Register theme stylesheet with dependencies
    wp_register_style('sage/app', false, ['wp-block-library', 'wp-block-library-theme']);
}, 100);

/**
 * Inject styles into the block editor.
 *
 * @return array
 */
add_filter('block_editor_settings_all', function ($settings) {
    $style = Vite::asset('resources/css/editor.css');

    $settings['styles'][] = [
        'css' => "@import url('{$style}')",
    ];

    return $settings;
});

/**
 * Inject scripts into the block editor.
 *
 * @return void
 */
add_action('admin_head', function () {
    if (! get_current_screen()?->is_block_editor()) {
        return;
    }

    $dependencies = json_decode(Vite::content('editor.deps.json'));

    foreach ($dependencies as $dependency) {
        if (! wp_script_is($dependency)) {
            wp_enqueue_script($dependency);
        }
    }

    echo Vite::withEntryPoints([
        'resources/js/editor.js',
    ])->toHtml();
});

/**
 * Use the generated theme.json file.
 *
 * @return string
 */
add_filter('theme_file_path', function ($path, $file) {
    return $file === 'theme.json'
        ? public_path('build/assets/theme.json')
        : $path;
}, 10, 2);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable support for Elementor
     */
    add_theme_support('elementor');

    /**
     * Enable full Gutenberg support
     */
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');

    /**
     * Enable support for Post Thumbnails on posts and pages.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable shortcode support in widgets
     */
    add_filter('widget_text', 'do_shortcode');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

/**
 * Theme setup
 */
add_action('wp_enqueue_scripts', function () {
    // Enqueue external scripts
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', [], null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', ['gsap'], null, true);
    wp_enqueue_script('splittext', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/SplitText.min.js', ['gsap'], null, true);
    wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', [], null, true);
    wp_enqueue_script('parallaxie', 'https://cdnjs.cloudflare.com/ajax/libs/parallaxie/0.5/parallaxie.min.js', ['jquery'], null, true);
}, 100);

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home_page = new FieldsBuilder('home_page');
$home_page
    ->setLocation('page_template', '==', 'template-home.blade.php')
    ->addImage('hero_background', [
        'label' => 'Hero Background Image',
        'return_format' => 'array',
    ])
    ->addText('hero_subtitle', [
        'label' => 'Hero Subtitle',
        'default_value' => 'crafted with love, served with passion',
    ])
    ->addText('hero_title', [
        'label' => 'Hero Title',
        'default_value' => 'Step into the aroma of freshly coffee',
    ])
    ->addTextarea('hero_description', [
        'label' => 'Hero Description',
        'default_value' => 'Discover a place where every cup is a masterpiece, crafted with passion and precision. From the rich, bold flavors of our signature blends to the cozy ambiance that feels like home.',
    ])
    ->addText('discover_button_text', [
        'label' => 'Discover Button Text',
        'default_value' => 'Discover coffee',
    ])
    ->addText('discover_button_link', [
        'label' => 'Discover Button Link',
        'default_value' => '/about',
    ])
    ->addText('book_button_text', [
        'label' => 'Book Button Text',
        'default_value' => 'book a table',
    ])
    ->addText('book_button_link', [
        'label' => 'Book Button Link',
        'default_value' => '/book-table',
    ])
    ->addRepeater('ticker_items', [
        'label' => 'Ticker Items',
        'layout' => 'table',
        'button_label' => 'Add Ticker Item',
    ])
        ->addImage('icon', [
            'label' => 'Icon',
            'return_format' => 'array',
        ])
        ->addText('text', [
            'label' => 'Text',
        ])
    ->endRepeater();

add_action('acf/init', function() use ($home_page) {
    acf_add_local_field_group($home_page->build());
});

