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
    wp_enqueue_script('sage/vendor.js', false, [], null, true);
    wp_enqueue_script('sage/app.js', false, ['sage/vendor.js'], null, true);
    wp_enqueue_style('sage/app.css', false, [], null);
}, 100);

/**
 * Register the initial theme setup.
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Register the editor color palette.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
     */
    add_theme_support('editor-color-palette', []);

    /**
     * Register the editor color gradient presets.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
     */
    add_theme_support('editor-gradient-presets', []);

    /**
     * Register the editor font sizes.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
     */
    add_theme_support('editor-font-sizes', []);

    /**
     * Register relative length units in the editor.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
     */
    add_theme_support('custom-units');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
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
        'return_format' => 'url',  // Changed from 'array' to 'url'
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


