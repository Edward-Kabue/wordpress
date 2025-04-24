<?php
/**
 * Title: Coffee Hero Section
 * Slug: twentytwentyfive/hero-coffee
 * Categories: banner, daily-grind
 * Keywords: coffee, hero, banner
 * Description: A hero section for coffee shops with customizable background and text.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/coffee-hero.jpg')); ?>","dimRatio":50,"customOverlayColor":"#50372a","minHeight":80,"minHeightUnit":"vh","contentPosition":"center left","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);min-height:80vh">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#50372a"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-bottom:0">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"lowercase"}},"textColor":"accent-1","className":"wow fadeInUp"} -->
                <h3 class="wp-block-heading wow fadeInUp has-accent-1-color has-text-color" style="font-style:normal;font-weight:500;text-transform:lowercase">crafted with love, served with passion</h3>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600"}},"textColor":"base","className":"text-anime-style-3"} -->
                <h1 class="wp-block-heading text-anime-style-3 has-base-color has-text-color" style="font-weight:600">Step into the aroma of freshly coffee</h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"base","className":"wow fadeInUp"} -->
                <p class="wow fadeInUp has-base-color has-text-color">Discover a place where every cup is a masterpiece, crafted with passion and precision. From the rich, bold flavors of our signature blends to the cozy ambiance that feels like home.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50"}}}} -->
                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"wow fadeInUp"} -->
                    <div class="wp-block-button wow fadeInUp"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button">Discover coffee</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"accent-1","textColor":"contrast","className":"wow fadeInUp"} -->
                    <div class="wp-block-button wow fadeInUp"><a class="wp-block-button__link has-contrast-color has-accent-1-background-color has-text-color has-background wp-element-button">Book a table</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

