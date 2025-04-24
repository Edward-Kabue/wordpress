<?php
/**
 * Title: Coffee Menu
 * Slug: twentytwentyfive/coffee-menu
 * Categories: daily-grind
 * Keywords: coffee, menu, food, pricing
 * Description: A menu section for coffee shop with tabs and pricing
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-3","className":"wow fadeInUp"} -->
        <h3 class="wp-block-heading wow fadeInUp has-accent-3-color has-text-color" style="font-style:normal;font-weight:500;text-transform:uppercase">Our pricing</h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"className":"text-anime-style-3"} -->
        <h2 class="wp-block-heading text-anime-style-3" style="font-weight:600">Savor every moment, without the premium price</h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","className":"our-pricing-box","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide our-pricing-box">
        <!-- wp:buttons {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"our-support-nav wow fadeInUp"} -->
        <div class="wp-block-buttons aligncenter our-support-nav wow fadeInUp" style="margin-bottom:var(--wp--preset--spacing--50)">
            <!-- wp:button {"backgroundColor":"accent-3","textColor":"base","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">All Menu</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"accent-5","textColor":"contrast","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-accent-5-background-color has-text-color has-background wp-element-button">Sea Food</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"accent-5","textColor":"contrast","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-accent-5-background-color has-text-color has-background wp-element-button">Desserts</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"accent-5","textColor":"contrast","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-accent-5-background-color has-text-color has-background wp-element-button">Drink & Wine</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"pricing-image image-anime"} -->
                <figure class="wp-block-image size-large pricing-image image-anime"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/menu-image.jpg')); ?>" alt="Coffee Menu"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                <!-- wp:group {"className":"our-menu-list","layout":{"type":"constrained"}} -->
                <div class="wp-block-group our-menu-list">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"menu-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                    <div class="wp-block-group menu-list-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                        <!-- wp:image {"width":80,"height":80,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"menu-list-image"} -->
                        <figure class="wp-block-image size-thumbnail is-resized menu-list-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/menu-item-1.jpg')); ?>" alt="Chips & Dip" width="80" height="80" style="object-fit:cover"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-body","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group menu-item-body">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-title","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group menu-item-title">
                                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                                <h3 class="wp-block-heading has-large-font-size">Chips & Dip</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <p style="font-style:normal;font-weight:600">$16.00</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:paragraph {"className":"menu-item-content"} -->
                            <p class="menu-item-content">A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"menu-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                    <div class="wp-block-group menu-list-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                        <!-- wp:image {"width":80,"height":80,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"menu-list-image"} -->
                        <figure class="wp-block-image size-thumbnail is-resized menu-list-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/menu-item-2.jpg')); ?>" alt="Tender Octopus" width="80" height="80" style="object-fit:cover"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-body","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group menu-item-body">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-title","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group menu-item-title">
                                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                                <h3 class="wp-block-heading has-large-font-size">Tender Octopus</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <p style="font-style:normal;font-weight:600">$16.00</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:paragraph {"className":"menu-item-content"} -->
                            <p class="menu-item-content">A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|40"}}},"className":"menu-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                    <div class="wp-block-group menu-list-item" style="margin-bottom:var(--wp--preset--spacing--40)">
                        <!-- wp:image {"width":80,"height":80,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"menu-list-image"} -->
                        <figure class="wp-block-image size-thumbnail is-resized menu-list-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/menu-item-3.jpg')); ?>" alt="Grilled Veal Filet" width="80" height="80" style="object-fit:cover"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-body","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group menu-item-body">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-title","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group menu-item-title">
                                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                                <h3 class="wp-block-heading has-large-font-size">Grilled Veal Filet</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <p style="font-style:normal;font-weight:600">$16.00</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:paragraph {"className":"menu-item-content"} -->
                            <p class="menu-item-content">A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"menu-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                    <div class="wp-block-group menu-list-item">
                        <!-- wp:image {"width":80,"height":80,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"menu-list-image"} -->
                        <figure class="wp-block-image size-thumbnail is-resized menu-list-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/menu-item-4.jpg')); ?>" alt="Mexican Soup" width="80" height="80" style="object-fit:cover"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-body","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group menu-item-body">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"menu-item-title","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group menu-item-title">
                                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                                <h3 class="wp-block-heading has-large-font-size">Mexican Soup</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <p style="font-style:normal;font-weight:600">$16.00</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:paragraph {"className":"menu-item-content"} -->
                            <p class="menu-item-content">A perfect pairing of crispy, freshly made chips and rich, flavorful dips that bring a burst of taste in every bite.</p>
                            <!-- /wp:paragraph -->
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
</div>
<!-- /wp:group -->
