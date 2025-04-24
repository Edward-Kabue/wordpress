<?php
/**
 * Title: Video Section
 * Slug: grind/video-section
 * Categories: grind, featured
 * Keywords: video, journey
 */
?>

<!-- wp:group {"backgroundColor":"primary","textColor":"white","className":"video-section py-16","layout":{"type":"constrained"}} -->
<div class="wp-block-group video-section py-16 has-white-color has-primary-background-color has-text-color has-background">
    <!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container">
        <!-- wp:heading {"level":3,"textAlign":"center","textColor":"secondary"} -->
        <h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color">our journey of success</h3>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"textAlign":"center","textColor":"white"} -->
        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color">Our coffee adventure, your favorite place</h2>
        <!-- /wp:heading -->
        
        <!-- wp:group {"className":"video-wrapper my-12","layout":{"type":"constrained"}} -->
        <div class="wp-block-group video-wrapper my-12">
            <!-- wp:video {"id":123} -->
            <figure class="wp-block-video"><video controls src="<?php echo esc_url(get_theme_file_uri('resources/videos/coffee-journey.mp4')); ?>"></video></figure>
            <!-- /wp:video -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:columns {"className":"counter-section"} -->
        <div class="wp-block-columns counter-section">
            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:heading {"textColor":"secondary"} -->
                <h2 class="wp-block-heading has-secondary-color has-text-color">300+</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>daily visitors</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:heading {"textColor":"secondary"} -->
                <h2 class="wp-block-heading has-secondary-color has-text-color">50</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>recipe created</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:heading {"textColor":"secondary"} -->
                <h2 class="wp-block-heading has-secondary-color has-text-color">120+</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>events hosted</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column {"className":"text-center"} -->
            <div class="wp-block-column text-center">
                <!-- wp:heading {"textColor":"secondary"} -->
                <h2 class="wp-block-heading has-secondary-color has-text-color">500+</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>happy customer</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
