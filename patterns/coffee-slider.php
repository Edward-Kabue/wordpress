<?php
/**
 * Title: Coffee Slider
 * Slug: twentytwentyfive/coffee-slider
 * Categories: daily-grind
 * Keywords: coffee, slider, carousel
 * Description: A slider showcasing coffee products
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"coffee-slider","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull coffee-slider" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"slider-heading"} -->
    <h2 class="wp-block-heading has-text-align-center slider-heading" style="margin-bottom:var(--wp--preset--spacing--50)">Our Featured Products</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","className":"slider-container"} -->
    <div class="wp-block-columns alignwide slider-container">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"accent-6","className":"slider-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group slider-item has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":200,"height":200,"scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"slider-image"} -->
                <figure class="wp-block-image aligncenter size-medium is-resized slider-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/coffee-product-1.jpg')); ?>" alt="Signature Blend" width="200" height="200" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Signature Blend</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Our signature blend of premium coffee beans, perfectly roasted for a rich and balanced flavor.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Shop Now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"accent-6","className":"slider-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group slider-item has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":200,"height":200,"scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"slider-image"} -->
                <figure class="wp-block-image aligncenter size-medium is-resized slider-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/coffee-product-2.jpg')); ?>" alt="Ethiopian Single Origin" width="200" height="200" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Ethiopian Single Origin</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Bright and fruity notes with a smooth finish, sourced from the highlands of Ethiopia.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Shop Now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"accent-6","className":"slider-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group slider-item has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":200,"height":200,"scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"slider-image"} -->
                <figure class="wp-block-image aligncenter size-medium is-resized slider-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/coffee-product-3.jpg')); ?>" alt="Dark Roast" width="200" height="200" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Dark Roast</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Bold and robust with notes of dark chocolate and caramel, perfect for espresso lovers.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Shop Now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
