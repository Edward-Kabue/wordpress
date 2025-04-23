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
 * Sanitize SVG uploads
 */
add_filter('wp_handle_upload_prefilter', function ($file) {
    if ($file['type'] === 'image/svg+xml') {
        if (!class_exists('enshrined\svgSanitize\Sanitizer')) {
            return [
                'error' => 'SVG Sanitizer is required but not available. Please install enshrined/svg-sanitize.'
            ];
        }

        $sanitizer = new \enshrined\svgSanitize\Sanitizer();
        $sanitizer->minify(true);
        
        $dirty = file_get_contents($file['tmp_name']);
        $clean = $sanitizer->sanitize($dirty);

        if ($clean === false) {
            return [
                'error' => 'SVG file failed sanitization'
            ];
        }

        file_put_contents($file['tmp_name'], $clean);
    }
    
    return $file;
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function ($more) {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});



