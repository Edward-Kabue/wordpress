<?php
/**
 * Title: Opening Hours
 * Slug: twentytwentyfive/opening-hours
 * Categories: daily-grind
 * Keywords: coffee, hours, opening, schedule
 * Description: A section displaying the coffee shop's opening hours
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px"}},"backgroundColor":"base","className":"opening-time-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group opening-time-box has-base-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"width":40,"height":40,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-clock.svg')); ?>" alt="Clock Icon" width="40" height="40" style="object-fit:cover"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size">Open hours</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <p style="font-style:normal;font-weight:500">Monday - Friday: 09:30 - 7:30</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <p style="font-style:normal;font-weight:500">Saturday: 10:30 - 5:00</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <p style="font-style:normal;font-weight:500">Sunday: 24 hours open</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
