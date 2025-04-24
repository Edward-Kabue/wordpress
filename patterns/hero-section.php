<?php
/**
 * Title: Hero Section
 * Slug: grind/hero-section
 * Categories: grind, featured
 * Keywords: hero, banner, header
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('resources/images/coffee-hero-bg.jpg')); ?>","dimRatio":50,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"hero-section"} -->
<div class="wp-block-cover alignfull hero-section" style="min-height:80vh">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('resources/images/coffee-hero-bg.jpg')); ?>" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"className":"hero-content","layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group hero-content">
            <!-- wp:heading {"level":3,"textColor":"secondary","className":"hero-subtitle"} -->
            <h3 class="wp-block-heading hero-subtitle has-secondary-color has-text-color">crafted with love, served with passion</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":1,"textColor":"white","className":"hero-title"} -->
            <h1 class="wp-block-heading hero-title has-white-color has-text-color">Step into the aroma of freshly coffee</h1>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"textColor":"white"} -->
            <p class="has-white-color has-text-color">Discover a place where every cup is a masterpiece, crafted with passion and precision. From the rich, bold flavors of our signature blends to the cozy ambiance that feels like home.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"secondary","textColor":"white","className":"btn-primary"} -->
                <div class="wp-block-button btn-primary"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background wp-element-button">Discover Coffee</a></div>
                <!-- /wp:button -->
                
                <!-- wp:button {"backgroundColor":"transparent","textColor":"white","className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-transparent-background-color has-text-color has-background wp-element-button">Book a Table</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
