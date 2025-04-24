<?php
/**
 * Title: Test Coffee Pattern
 * Slug: twentytwentyfive/test-coffee
 * Categories: daily-grind
 * Keywords: test, coffee
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/whychooseus-bg.jpg')); ?>","dimRatio":90,"overlayColor":"contrast","minHeight":800,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull" style="min-height:800px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40)">
    <span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-90 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%">
                    <!-- wp:paragraph {"textColor":"accent-1","fontSize":"small"} -->
                    <p class="has-accent-1-color has-text-color has-small-font-size"><?php echo esc_html_x('Why Choose Us', 'Section subtitle', 'twentytwentyfive'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x('WHERE FLAVOR MEETS COMFORT AND SERVICES', 'Section heading', 'twentytwentyfive'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                        <!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php echo esc_html_x('Contact Us', 'Button text', 'twentytwentyfive'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"60%"} -->
                <div class="wp-block-column" style="flex-basis:60%">
                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                    <div class="wp-block-columns">
                        <?php
                        $features = array(
                            array('title' => 'Fully Responsive', 'icon' => '🖥️'),
                            array('title' => 'Fresh Ingredients', 'icon' => '🥗'),
                            array('title' => 'Exclusive Chefs', 'icon' => '👨‍🍳'),
                            array('title' => 'Fast Services', 'icon' => '⚡'),
                            array('title' => 'Friendly Atmosphere', 'icon' => '🏠'),
                            array('title' => 'Free WiFi', 'icon' => '📶'),
                        );

                        foreach (array_chunk($features, 2) as $row) :
                        ?>
                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <?php foreach ($row as $feature) : ?>
                            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-contrast-background-color has-background" style="border-radius:8px;padding:var(--wp--preset--spacing--40)">
                                <!-- wp:paragraph {"textColor":"base","fontSize":"large"} -->
                                <p class="has-base-color has-text-color has-large-font-size"><?php echo esc_html($feature['icon']); ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3,"textColor":"base","fontSize":"medium"} -->
                                <h3 class="wp-block-heading has-base-color has-text-color has-medium-font-size"><?php echo esc_html($feature['title']); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
                                <p class="has-base-color has-text-color has-small-font-size"><?php echo esc_html_x('Designed to reduce allergens, dust, and pollutants, these systems create a healthier.', 'Feature description', 'twentytwentyfive'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <?php endforeach; ?>
                        </div>
                        <!-- /wp:column -->
                        <?php endforeach; ?>
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->