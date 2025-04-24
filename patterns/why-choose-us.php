<?php
/**
 * Title: Why Choose Us
 * Slug: twentytwentyfive/why-choose-us
 * Categories: daily-grind
 * Keywords: coffee, features, services
 * Description: A section highlighting the benefits of choosing our coffee shop
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"backgroundColor":{"background":"#f9f7f5"}},"className":"light-bg-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull light-bg-section" style="background:#f9f7f5;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"why-choose-content","layout":{"type":"constrained"}} -->
            <div class="wp-block-group why-choose-content">
                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-3","className":"wow fadeInUp"} -->
                <h3 class="wp-block-heading wow fadeInUp has-accent-3-color has-text-color" style="font-style:normal;font-weight:500;text-transform:uppercase">why choose us</h3>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"className":"text-anime-style-3"} -->
                <h2 class="wp-block-heading text-anime-style-3" style="font-weight:600">Where flavor meets comfort and services</h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"wow fadeInUp"} -->
                <div class="wp-block-buttons wow fadeInUp" style="margin-top:var(--wp--preset--spacing--40)">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Contact us</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:group {"className":"why-choose-list wow fadeInUp","layout":{"type":"constrained"}} -->
            <div class="wp-block-group why-choose-list wow fadeInUp">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"why-choose-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                        <div class="wp-block-group why-choose-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                            <!-- wp:image {"width":50,"height":50,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-responsive.svg')); ?>" alt="Responsive Icon" width="50" height="50" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"lowercase"}},"fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-medium-font-size" style="text-transform:lowercase">fully responsive</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Designed to reduce allergens, dust, and pollutants, these systems create a healthier.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"why-choose-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                        <div class="wp-block-group why-choose-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                            <!-- wp:image {"width":50,"height":50,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-ingredients.svg')); ?>" alt="Ingredients Icon" width="50" height="50" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"lowercase"}},"fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-medium-font-size" style="text-transform:lowercase">fresh ingredients</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Designed to reduce allergens, dust, and pollutants, these systems create a healthier.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"why-choose-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                        <div class="wp-block-group why-choose-item">
                            <!-- wp:image {"width":50,"height":50,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-chef.svg')); ?>" alt="Chef Icon" width="50" height="50" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"lowercase"}},"fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-medium-font-size" style="text-transform:lowercase">exclusive chef's</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Designed to reduce allergens, dust, and pollutants, these systems create a healthier.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"why-choose-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                        <div class="wp-block-group why-choose-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                            <!-- wp:image {"width":50,"height":50,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-fast.svg')); ?>" alt="Fast Service Icon" width="50" height="50" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"lowercase"}},"fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-medium-font-size" style="text-transform:lowercase">fast services</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Designed to reduce allergens, dust, and pollutants, these systems create a healthier.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"why-choose-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                        <div class="wp-block-group why-choose-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                            <!-- wp:image {"width":50,"height":50,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-atmosphere.svg')); ?>" alt="Atmosphere Icon" width="50" height="50" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"lowercase"}},"fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-medium-font-size" style="text-transform:lowercase">friendly atmosphere</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Designed to reduce allergens, dust, and pollutants, these systems create a healthier.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"why-choose-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                        <div class="wp-block-group why-choose-item">
                            <!-- wp:image {"width":50,"height":50,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-wifi.svg')); ?>" alt="WiFi Icon" width="50" height="50" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"lowercase"}},"fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-medium-font-size" style="text-transform:lowercase">Free WIFI</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Designed to reduce allergens, dust, and pollutants, these systems create a healthier.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
