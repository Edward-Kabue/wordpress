<?php
/**
 * Title: Intro Video
 * Slug: twentytwentyfive/intro-video
 * Categories: daily-grind
 * Keywords: coffee, video, stats, counters
 * Description: A section with video and statistics about the coffee shop
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/intro-video-bg.jpg')); ?>","dimRatio":60,"overlayColor":"contrast","minHeight":600,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);min-height:600px">
    <span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('assets/images/intro-video-bg.jpg')); ?>" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"intro-video-content","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group intro-video-content">
                        <!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-1","className":"wow fadeInUp"} -->
                        <h3 class="wp-block-heading wow fadeInUp has-accent-1-color has-text-color" style="font-style:normal;font-weight:500;text-transform:uppercase">our journey of success</h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"style":{"typography":{"fontWeight":"600"}},"textColor":"base","className":"text-anime-style-3"} -->
                        <h2 class="wp-block-heading text-anime-style-3 has-base-color has-text-color" style="font-weight:600">Our coffee adventure, your favorite place</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                    <!-- wp:group {"className":"intro-video-box about-intro-video wow fadeInUp","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group intro-video-box about-intro-video wow fadeInUp">
                        <!-- wp:image {"width":80,"height":80,"scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"video-play-button"} -->
                        <figure class="wp-block-image size-full is-resized video-play-button"><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/play-button.svg')); ?>" alt="Play Video" width="80" height="80" style="object-fit:cover"/></a></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"small"} -->
                        <p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500">watch video</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60)">
                <!-- wp:columns {"align":"wide","className":"intro-video-counters"} -->
                <div class="wp-block-columns alignwide intro-video-counters">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"video-counter-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                        <div class="wp-block-group video-counter-item">
                            <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-visitors.svg')); ?>" alt="Visitors Icon" width="60" height="60" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"textColor":"base"} -->
                                <h2 class="wp-block-heading has-base-color has-text-color">300+</h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base"} -->
                                <p class="has-base-color has-text-color" style="font-style:normal;font-weight:500">daily visitors</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"video-counter-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                        <div class="wp-block-group video-counter-item">
                            <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-recipe.svg')); ?>" alt="Recipe Icon" width="60" height="60" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"textColor":"base"} -->
                                <h2 class="wp-block-heading has-base-color has-text-color">50</h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base"} -->
                                <p class="has-base-color has-text-color" style="font-style:normal;font-weight:500">recipe created</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"video-counter-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                        <div class="wp-block-group video-counter-item">
                            <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-events.svg')); ?>" alt="Events Icon" width="60" height="60" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"textColor":"base"} -->
                                <h2 class="wp-block-heading has-base-color has-text-color">120+</h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base"} -->
                                <p class="has-base-color has-text-color" style="font-style:normal;font-weight:500">events hosted</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"video-counter-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                        <div class="wp-block-group video-counter-item">
                            <!-- wp:image {"width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"icon-box"} -->
                            <figure class="wp-block-image size-full is-resized icon-box"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-customers.svg')); ?>" alt="Customers Icon" width="60" height="60" style="object-fit:cover"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"textColor":"base"} -->
                                <h2 class="wp-block-heading has-base-color has-text-color">500+</h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base"} -->
                                <p class="has-base-color has-text-color" style="font-style:normal;font-weight:500">happy customer</p>
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
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
