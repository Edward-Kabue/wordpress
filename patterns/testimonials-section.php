<?php
/**
 * Title: Testimonials Section
 * Slug: grind/testimonials-section
 * Categories: grind, featured
 * Keywords: testimonials, reviews
 */
?>

<!-- wp:group {"backgroundColor":"light","className":"testimonials-section py-16","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonials-section py-16 has-light-background-color has-background">
    <!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container">
        <!-- wp:group {"className":"section-title","layout":{"type":"constrained"}} -->
        <div class="wp-block-group section-title">
            <!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
            <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">What Our Customers Say</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"backgroundColor":"white","className":"testimonial p-8 rounded-lg shadow-md"} -->
                <div class="wp-block-group testimonial p-8 rounded-lg shadow-md has-white-background-color has-background">
                    <!-- wp:image {"align":"center","width":80,"height":80,"sizeSlug":"thumbnail","linkDestination":"none","className":"rounded-full mb-4"} -->
                    <figure class="wp-block-image aligncenter size-thumbnail is-resized rounded-full mb-4"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/testimonial-1.jpg')); ?>" alt="Customer 1" width="80" height="80"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:paragraph {"align":"center","className":"testimonial-text"} -->
                    <p class="has-text-align-center testimonial-text">"The best coffee I've ever had! The atmosphere is cozy and the staff is incredibly friendly. This is my go-to spot for morning coffee."</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"primary","className":"testimonial-name"} -->
                    <h4 class="wp-block-heading has-text-align-center testimonial-name has-primary-color has-text-color">Sarah Johnson</h4>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","className":"testimonial-position"} -->
                    <p class="has-text-align-center testimonial-position">Regular Customer</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"backgroundColor":"white","className":"testimonial p-8 rounded-lg shadow-md"} -->
                <div class="wp-block-group testimonial p-8 rounded-lg shadow-md has-white-background-color has-background">
                    <!-- wp:image {"align":"center","width":80,"height":80,"sizeSlug":"thumbnail","linkDestination":"none","className":"rounded-full mb-4"} -->
                    <figure class="wp-block-image aligncenter size-thumbnail is-resized rounded-full mb-4"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/testimonial-2.jpg')); ?>" alt="Customer 2" width="80" height="80"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:paragraph {"align":"center","className":"testimonial-text"} -->
                    <p class="has-text-align-center testimonial-text">"I love their Ethiopian blend! The quality of the coffee is outstanding, and the pastries are always fresh. Highly recommend!"</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"primary","className":"testimonial-name"} -->
                    <h4 class="wp-block-heading has-text-align-center testimonial-name has-primary-color has-text-color">Michael Chen</h4>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","className":"testimonial-position"} -->
                    <p class="has-text-align-center testimonial-position">Coffee Enthusiast</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"backgroundColor":"white","className":"testimonial p-8 rounded-lg shadow-md"} -->
                <div class="wp-block-group testimonial p-8 rounded-lg shadow-md has-white-background-color has-background">
                    <!-- wp:image {"align":"center","width":80,"height":80,"sizeSlug":"thumbnail","linkDestination":"none","className":"rounded-full mb-4"} -->
                    <figure class="wp-block-image aligncenter size-thumbnail is-resized rounded-full mb-4"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/testimonial-3.jpg')); ?>" alt="Customer 3" width="80" height="80"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:paragraph {"align":"center","className":"testimonial-text"} -->
                    <p class="has-text-align-center testimonial-text">"Perfect spot for remote work. The Wi-Fi is reliable, the coffee is delicious, and the ambiance is just right for productivity."</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"primary","className":"testimonial-name"} -->
                    <h4 class="wp-block-heading has-text-align-center testimonial-name has-primary-color has-text-color">Emily Rodriguez</h4>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","className":"testimonial-position"} -->
                    <p class="has-text-align-center testimonial-position">Freelance Designer</p>
                    <!-- /wp:paragraph -->
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
