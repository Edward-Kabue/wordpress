<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Grind Team
 * @Last Modified time: 2025-04-24 22:30:00
 *
 * @package grind
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Air_Light;

the_post();

get_header(); ?>

<main class="site-main">
  <?php
    // Check if a specific page template is being used
    $template = get_page_template_slug();

    if ( $template === 'templates/template-with-sidebar.php' ) {
      get_template_part( 'template-parts/page/content', 'with-sidebar' );
    } elseif ( $template === 'templates/template-full-width.php' ) {
      get_template_part( 'template-parts/page/content', 'full-width' );
    } elseif ( $template === 'templates/template-no-title.php' ) {
      get_template_part( 'template-parts/page/content', 'no-title' );
    } else {
      // Default page template
      get_template_part( 'template-parts/page/content' );
    }
  ?>
</main>

<?php get_footer();
