<?php
/**
 * Register widget areas.
 *
 * @package grind
 */

namespace Air_Light;

/**
 * Register widget areas
 */
function register_sidebars() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'grind' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'grind' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', __NAMESPACE__ . '\\register_sidebars' );
