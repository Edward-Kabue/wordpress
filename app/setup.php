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
    // Add Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Forum&family=Jost:ital,wght@0,100..900;1,100..900&display=swap', [], null);
    
    // Add external stylesheets
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', [], null);
    wp_enqueue_style('slicknav', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', [], null);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], null);
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', [], null);
    wp_enqueue_style('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', [], null);
    
    // Add custom stylesheets
    wp_enqueue_style('mouse-cursor', get_template_directory_uri() . '/resources/css/mousecursor.css', [], null);
}, 100);

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home = new FieldsBuilder('home');

$home
    ->setLocation('page_template', '==', 'views/template-home.blade.php')
    ->addImage('hero_background', [
        'label' => 'Hero Background',
        'return_format' => 'url',
    ])
    ->addText('hero_subtitle', [
        'label' => 'Hero Subtitle',
        'default_value' => 'crafted with love, served with passion',
    ])
    ->addText('hero_title', [
        'label' => 'Hero Title',
        'default_value' => 'Step into the aroma of freshly coffee',
    ])
    ->addTextarea('hero_description')
    ->addLink('hero_primary_button', [
        'label' => 'Primary Button',
        'return_format' => 'array',
    ])
    ->addLink('hero_secondary_button', [
        'label' => 'Secondary Button',
        'return_format' => 'array',
    ])
    ->addRepeater('coffee_items', [
        'label' => 'Coffee Items',
        'layout' => 'table',
    ])
        ->addText('name')
    ->endRepeater()
    ->addText('about_subtitle')
    ->addText('about_title')
    ->addRepeater('about_features', [
        'layout' => 'block',
    ])
        ->addImage('icon')
        ->addText('title')
        ->addTextarea('description')
    ->endRepeater()
    ->addLink('about_button')
    ->addUrl('about_video_url')
    ->addImage('about_image')
    ->addText('opening_hours_title')
    ->addRepeater('opening_hours', [
        'layout' => 'table',
    ])
        ->addText('days')
        ->addText('time')
    ->endRepeater();

add_action('acf/init', function() use ($home) {
    acf_add_local_field_group($home->build());
});

// Add site options
$options = new FieldsBuilder('theme_options');

$options
    ->setLocation('options_page', '==', 'theme-options')
    ->addImage('asterisk_icon', [
        'label' => 'Asterisk Icon',
        'return_format' => 'id',
    ]);

add_action('acf/init', function() use ($options) {
    acf_add_local_field_group($options->build());
});
