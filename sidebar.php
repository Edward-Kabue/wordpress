<?php
/**
 * The sidebar containing the main widget area
 * Implement your custom sidebar to this file.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Grind Team
 * @Last Modified time: 2025-04-24 22:40:00
 *
 * @package grind
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  // If no widgets are active, display some default content
  ?>
  <aside id="secondary" class="widget-area default-sidebar">
    <div class="widget">
      <h2 class="widget-title"><?php echo esc_html__( 'About This Page', 'grind' ); ?></h2>
      <div class="textwidget">
        <p><?php echo esc_html__( 'This is the sidebar area. You can add widgets here by going to Appearance > Widgets in your WordPress admin.', 'grind' ); ?></p>
      </div>
    </div>

    <div class="widget">
      <h2 class="widget-title"><?php echo esc_html__( 'Recent Posts', 'grind' ); ?></h2>
      <ul>
        <?php
        $recent_posts = wp_get_recent_posts( array(
          'numberposts' => 5,
          'post_status' => 'publish',
        ) );

        foreach ( $recent_posts as $post ) {
          echo '<li><a href="' . get_permalink( $post['ID'] ) . '">' . $post['post_title'] . '</a></li>';
        }
        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </aside><!-- #secondary -->
  <?php
  return;
}
?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
