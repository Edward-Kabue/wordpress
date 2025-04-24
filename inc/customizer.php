<?php
function twentytwentyfive_coffee_customize_register($wp_customize) {
    // Coffee Shop Settings Section
    $wp_customize->add_section('coffee_shop_settings', array(
        'title'    => __('Coffee Shop Settings', 'twentytwentyfive'),
        'priority' => 30,
    ));

    // Logo Upload
    $wp_customize->add_setting('coffee_shop_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'coffee_shop_logo', array(
        'label'    => __('Upload Logo', 'twentytwentyfive'),
        'section'  => 'coffee_shop_settings',
        'settings' => 'coffee_shop_logo',
    )));

    // Favicon Upload
    $wp_customize->add_setting('coffee_shop_favicon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'coffee_shop_favicon', array(
        'label'    => __('Upload Favicon', 'twentytwentyfive'),
        'section'  => 'coffee_shop_settings',
        'settings' => 'coffee_shop_favicon',
    )));

    // Primary Color
    $wp_customize->add_setting('coffee_shop_primary_color', array(
        'default'           => '#4A3827',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'coffee_shop_primary_color', array(
        'label'    => __('Primary Color', 'twentytwentyfive'),
        'section'  => 'coffee_shop_settings',
        'settings' => 'coffee_shop_primary_color',
    )));

    // Secondary Color
    $wp_customize->add_setting('coffee_shop_secondary_color', array(
        'default'           => '#D4A574',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'coffee_shop_secondary_color', array(
        'label'    => __('Secondary Color', 'twentytwentyfive'),
        'section'  => 'coffee_shop_settings',
        'settings' => 'coffee_shop_secondary_color',
    )));
}
add_action('customize_register', 'twentytwentyfive_coffee_customize_register');