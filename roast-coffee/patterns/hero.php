<?php
/**
 * Title: Hero Section
 * Slug: roast-coffee/hero
 * Categories: featured
 * Block Types: core/group
 */
?>

<!-- wp:group {"className":"hero hero-slider-layout","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero hero-slider-layout">
    <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg-1.jpg","dimRatio":60,"overlayColor":"secondary","minHeight":800,"isDark":false,"align":"full","className":"has-parallax hero-slide slide-1"} -->
    <div class="wp-block-cover alignfull has-parallax hero-slide slide-1">
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"className":"container"} -->
            <div class="wp-block-group container">
                <!-- wp:group {"className":"row align-items-center"} -->
                <div class="wp-block-group row align-items-center">
                    <!-- wp:group {"className":"col-lg-8 col-md-10"} -->
                    <div class="wp-block-group col-lg-8 col-md-10">
                        <!-- wp:group {"className":"hero-content"} -->
                        <div class="wp-block-group hero-content">
                            <!-- wp:group {"className":"section-title"} -->
                            <div class="wp-block-group section-title">
                                <!-- wp:heading {"level":3,"className":"subtitle-with-icon"} -->
                                <h3 class="subtitle-with-icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/coffee-bean-icon.png" alt="" class="subtitle-icon"/>
                                    Crafted With Love, Served With Passion
                                </h3>
                                <!-- /wp:heading -->

                                <!-- wp:heading {"level":1,"className":"hero-title"} -->
                                <h1 class="hero-title">STEP INTO THE AROMA OF<br>FRESHLY COFFEE</h1>
                                <!-- /wp:heading -->
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
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->

















