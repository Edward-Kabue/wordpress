<?php
/**
 * Template part for displaying full-width page content
 *
 * @package grind
 */

namespace Air_Light;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'full-width' ); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-featured-image full-width">
      <?php the_post_thumbnail( 'full' ); ?>
    </div><!-- .entry-featured-image -->
  <?php endif; ?>

  <div class="entry-content">
    <?php
      the_content();
      air_edit_link();
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
