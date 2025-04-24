<?php
/**
 * Title: About Coffee Shop
 * Slug: twentytwentyfive/about-coffee-shop
 * Categories: daily-grind
 * Keywords: coffee, about, services
 * Description: About section for coffee shop with services and opening hours
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-3","className":"wow fadeInUp"} -->
                <h3 class="wp-block-heading wow fadeInUp has-accent-3-color has-text-color" style="font-style:normal;font-weight:500;text-transform:uppercase">about us</h3>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"className":"text-anime-style-3"} -->
                <h2 class="wp-block-heading text-anime-style-3" style="font-weight:600">Bringing people together, one cup at a time</h2>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"about-body-item wow fadeInUp","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                    <div class="wp-block-group about-body-item wow fadeInUp">
                        <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-delivery.svg')); ?>" alt="Food Delivery Icon" width="60" height="60" style="object-fit:cover"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:heading {"level":3,"fontSize":"large"} -->
                            <h3 class="wp-block-heading has-large-font-size">Food delivery</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p>With our fast and reliable food delivery service, your favorite coffee, snacks, and treats are just a click away.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"about-body-item wow fadeInUp","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                    <div class="wp-block-group about-body-item wow fadeInUp">
                        <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-event.svg')); ?>" alt="Event Icon" width="60" height="60" style="object-fit:cover"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:heading {"level":3,"fontSize":"large"} -->
                            <h3 class="wp-block-heading has-large-font-size">Event elegance</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p>Host your special moments with us! From intimate gatherings to vibrant celebrations offers.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"className":"about-us-footer wow fadeInUp","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group about-us-footer wow fadeInUp" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">More about us</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"video-play-button","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group video-play-button">
                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:500">watch video</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:group {"className":"about-us-image","layout":{"type":"constrained"}} -->
            <div class="wp-block-group about-us-image">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"image-anime"} -->
                <figure class="wp-block-image size-large image-anime"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about-coffee.jpg')); ?>" alt="Coffee shop interior"/></figure>
                <!-- /wp:image -->

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
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
