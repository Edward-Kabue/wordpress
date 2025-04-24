<?php
/**
 * Template part for displaying page content with sidebar
 *
 * @package grind
 */

namespace Air_Light;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'has-sidebar' ); ?>>
  <div class="content-area">
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

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
  </div><!-- .content-area -->

  <aside class="sidebar">
    <?php get_sidebar(); ?>
  </aside><!-- .sidebar -->
</article><!-- #post-## -->
