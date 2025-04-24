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

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/coffee-hero.jpg')); ?>","dimRatio":50,"customOverlayColor":"#50372a","minHeight":600,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull" style="min-height:600px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#50372a"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":1,"fontSize":"xx-large","style":{"typography":{"fontWeight":"600"}}} -->
            <h1 class="wp-block-heading has-xx-large-font-size" style="font-weight:600"><?php echo esc_html_x('Discover your perfect brews', 'Hero heading', 'twentytwentyfive'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php echo esc_html_x('Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia.', 'Hero description', 'twentytwentyfive'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"accent-1","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-base-color has-accent-1-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html_x('Explore Menu', 'Button text', 'twentytwentyfive'); ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

