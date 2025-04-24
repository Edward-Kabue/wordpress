<?php
/**
 * Title: Coffee Hero Section
 * Slug: twentytwentyfour/hero-coffee
 * Categories: featured, hero
 * Keywords: hero, coffee, banner
 * Viewport width: 1400
 * Description: A hero section for coffee shop with background image and call-to-action
 */
?>

<!-- wp:cover {"dimRatio":50,"overlayColor":"black","minHeight":700,"isDark":true,"align":"full"} -->
<div class="wp-block-cover alignfull is-dark" style="min-height:700px">
  <span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span>
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
  <div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-group">
      <!-- wp:paragraph {"textColor":"beige","fontSize":"small"} -->
      <p class="has-beige-color has-text-color has-small-font-size">Crafted With Love, Served With Passion</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"64px","lineHeight":"1.1"}},"textColor":"white"} -->
      <h1 class="wp-block-heading has-white-color has-text-color" style="font-size:64px;line-height:1.1">STEP INTO THE AROMA OF<br>FRESHLY COFFEE</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"textColor":"white","fontSize":"medium"} -->
      <p class="has-white-color has-text-color has-medium-font-size">Discover a place where every cup is a masterpiece, crafted with passion and precision. From the rich, bold flavors of our signature blends to the cozy ambiance that feels like home.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"backgroundColor":"beige","textColor":"black","style":{"border":{"radius":"0px"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-beige-background-color has-text-color has-background wp-element-button" style="border-radius:0px">Discover Coffee</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"transparent","textColor":"white","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-transparent-background-color has-text-color has-background wp-element-button" style="border-radius:0px;border-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)">Book A Table</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:cover -->