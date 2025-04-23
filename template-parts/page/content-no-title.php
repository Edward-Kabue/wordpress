<?php
/**
 * Template part for displaying page content without title
 *
 * @package grind
 */

namespace Air_Light;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'no-title' ); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-featured-image">
      <?php the_post_thumbnail( 'large' ); ?>
    </div><!-- .entry-featured-image -->
  <?php endif; ?>

  <div class="entry-content">
    <?php
      the_content();
      air_edit_link();
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
