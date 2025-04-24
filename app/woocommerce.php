<?php

/**
 * WooCommerce setup
 */

/**
 * Add WooCommerce support
 */
add_action('after_setup_theme', function () {
    // Add WooCommerce support
    add_theme_support('woocommerce');

    // Add Product Gallery support
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
});

/**
 * WooCommerce specific scripts & stylesheets
 */
add_action('wp_enqueue_scripts', function () {
    // Disable WooCommerce styles
    add_filter('woocommerce_enqueue_styles', '__return_empty_array');
});

/**
 * Disable the default WooCommerce stylesheet
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Related Products Args
 */
add_filter('woocommerce_output_related_products_args', function ($args) {
    $args = [
        'posts_per_page' => 3,
        'columns' => 3,
    ];

    return $args;
});

/**
 * Remove default WooCommerce wrapper
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * Add custom WooCommerce wrapper
 */
add_action('woocommerce_before_main_content', function () {
    echo '<div class="container mx-auto px-4 py-8"><div class="woocommerce-content">';
}, 10);

add_action('woocommerce_after_main_content', function () {
    echo '</div></div>';
}, 10);

/**
 * Modify WooCommerce product loop item title
 */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function () {
    echo '<h2 class="woocommerce-loop-product__title font-secondary text-primary">' . get_the_title() . '</h2>';
}, 10);

/**
 * Change number of products per row
 */
add_filter('loop_shop_columns', function () {
    return 3;
});

/**
 * Change number of products displayed per page
 */
add_filter('loop_shop_per_page', function () {
    return 9;
});



/**
 * Modify Add to Cart button text
 */
add_filter('woocommerce_product_add_to_cart_text', function () {
    return __('Add to Cart', 'grind');
});

/**
 * Modify Sale Flash
 */
add_filter('woocommerce_sale_flash', function () {
    return '<span class="onsale bg-secondary text-white py-1 px-3 rounded-full">' . __('Sale!', 'grind') . '</span>';
});


