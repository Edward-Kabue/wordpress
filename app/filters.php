<?php

namespace App;

/**
 * Enable shortcodes in text widgets
 */
add_filter('widget_text', 'do_shortcode');

/**
 * Enable shortcodes in category descriptions
 */
add_filter('category_description', 'do_shortcode');

/**
 * Enable upload of additional mime types
 */
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

