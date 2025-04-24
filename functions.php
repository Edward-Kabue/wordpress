<?php
/**
 * Twenty Twenty-Five functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

/**
 * Add theme support for block templates
 */
function twentytwentyfive_setup() {
    // Add support for block templates
    add_theme_support( 'block-templates' );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for custom units
    add_theme_support( 'custom-units' );

    // Add support for experimental link color control
    add_theme_support( 'experimental-link-color' );

    // Add support for custom line height
    add_theme_support( 'custom-line-height' );

    // Add support for experimental cover block spacing
    add_theme_support( 'custom-spacing' );

    // Add support for custom units
    add_theme_support( 'custom-units' );
}
add_action( 'after_setup_theme', 'twentytwentyfive_setup' );

// Enqueues style.css on the front.
if ( ! function_exists( 'twentytwentyfive_enqueue_styles' ) ) :
    /**
     * Enqueues style.css on the front.
     *
     * @since Twenty Twenty-Five 1.0
     *
     * @return void
     */
    function twentytwentyfive_enqueue_styles() {
        wp_enqueue_style(
            'twentytwentyfive-style',
            get_parent_theme_file_uri( 'style.css' ),
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
endif;
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'twentytwentyfive_block_styles' ) ) :
    /**
     * Registers custom block styles.
     *
     * @since Twenty Twenty-Five 1.0
     *
     * @return void
     */
    function twentytwentyfive_block_styles() {
        register_block_style(
            'core/list',
            array(
                'name'         => 'checkmark-list',
                'label'        => __( 'Checkmark', 'twentytwentyfive' ),
                'inline_style' => '
                ul.is-style-checkmark-list {
                    list-style-type: "\2713";
                }

                ul.is-style-checkmark-list li {
                    padding-inline-start: 1ch;
                }',
            )
        );
    }
endif;
add_action( 'init', 'twentytwentyfive_block_styles' );

/**
 * Register block pattern categories.
 */
function twentytwentyfive_register_pattern_categories() {
    register_block_pattern_category(
        'daily-grind',
        array(
            'label' => __( 'Daily Grind', 'twentytwentyfive' ),
            'description' => __( 'Coffee-themed patterns', 'twentytwentyfive' ),
        )
    );
}
add_action( 'init', 'twentytwentyfive_register_pattern_categories' );

