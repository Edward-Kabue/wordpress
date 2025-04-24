<?php
/**
 * Title: About Section
 * Slug: grind/about-section
 * Categories: grind, featured
 * Keywords: about, story
 */
?>

<!-- wp:group {"backgroundColor":"white","className":"about-section py-16","layout":{"type":"constrained"}} -->
<div class="wp-block-group about-section py-16 has-white-background-color has-background">
    <!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container">
        <!-- wp:group {"className":"section-title","layout":{"type":"constrained"}} -->
        <div class="wp-block-group section-title">
            <!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
            <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">Our Story</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:columns {"className":"items-center"} -->
        <div class="wp-block-columns items-center">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"rounded-lg shadow-lg"} -->
                <figure class="wp-block-image size-large rounded-lg shadow-lg"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/about-coffee.jpg')); ?>" alt="About Grind Coffee"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":3,"textColor":"primary","className":"mb-4 font-secondary"} -->
                <h3 class="wp-block-heading mb-4 font-secondary has-primary-color has-text-color">Passion for Quality Coffee</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4">Founded in 2023, Grind Coffee Shop was born out of a passion for exceptional coffee and a desire to create a warm, welcoming space for our community.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"className":"mb-4"} -->
                <p class="mb-4">We source our beans directly from sustainable farms around the world, ensuring fair prices for farmers and the highest quality for our customers.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {"className":"mb-6"} -->
                <p class="mb-6">Every cup is crafted with care by our skilled baristas, who are dedicated to the art and science of coffee making.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"secondary","textColor":"white","className":"btn-primary"} -->
                    <div class="wp-block-button btn-primary"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background wp-element-button">Learn More</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
