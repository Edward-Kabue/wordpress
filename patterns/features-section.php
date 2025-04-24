<?php
/**
 * Title: Features Section
 * Slug: grind/features-section
 * Categories: grind, featured
 * Keywords: features, why choose us
 */
?>

<!-- wp:group {"backgroundColor":"light","className":"features-section py-16","layout":{"type":"constrained"}} -->
<div class="wp-block-group features-section py-16 has-light-background-color has-background">
    <!-- wp:group {"className":"container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container">
        <!-- wp:heading {"level":3,"textAlign":"center","textColor":"secondary"} -->
        <h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color">why choose us</h3>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
        <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">Where flavor meets comfort and services</h2>
        <!-- /wp:heading -->
        
        <!-- wp:columns {"className":"mt-12"} -->
        <div class="wp-block-columns mt-12">
            <!-- wp:column {"width":"33%"} -->
            <div class="wp-block-column" style="flex-basis:33%">
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"secondary","textColor":"white","width":100,"className":"btn-primary"} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100 btn-primary"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background wp-element-button">Contact us</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"67%"} -->
            <div class="wp-block-column" style="flex-basis:67%">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"backgroundColor":"white","className":"p-6 rounded-lg shadow-md"} -->
                        <div class="wp-block-group p-6 rounded-lg shadow-md has-white-background-color has-background">
                            <!-- wp:image {"width":50,"height":50,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/icon-beans.svg')); ?>" alt="Premium Beans" width="50" height="50"/></figure>
                            <!-- /wp:image -->
                            
                            <!-- wp:heading {"level":3,"textColor":"primary"} -->
                            <h3 class="wp-block-heading has-primary-color has-text-color">premium beans</h3>
                            <!-- /wp:heading -->
                            
                            <!-- wp:paragraph -->
                            <p>We source only the highest quality coffee beans from sustainable farms around the world.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"backgroundColor":"white","className":"p-6 rounded-lg shadow-md"} -->
                        <div class="wp-block-group p-6 rounded-lg shadow-md has-white-background-color has-background">
                            <!-- wp:image {"width":50,"height":50,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/icon-barista.svg')); ?>" alt="Expert Baristas" width="50" height="50"/></figure>
                            <!-- /wp:image -->
                            
                            <!-- wp:heading {"level":3,"textColor":"primary"} -->
                            <h3 class="wp-block-heading has-primary-color has-text-color">expert baristas</h3>
                            <!-- /wp:heading -->
                            
                            <!-- wp:paragraph -->
                            <p>Our skilled baristas are trained in the art and science of coffee making to deliver the perfect cup.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"backgroundColor":"white","className":"p-6 rounded-lg shadow-md"} -->
                        <div class="wp-block-group p-6 rounded-lg shadow-md has-white-background-color has-background">
                            <!-- wp:image {"width":50,"height":50,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/icon-atmosphere.svg')); ?>" alt="Cozy Atmosphere" width="50" height="50"/></figure>
                            <!-- /wp:image -->
                            
                            <!-- wp:heading {"level":3,"textColor":"primary"} -->
                            <h3 class="wp-block-heading has-primary-color has-text-color">cozy atmosphere</h3>
                            <!-- /wp:heading -->
                            
                            <!-- wp:paragraph -->
                            <p>Our shop provides a warm, inviting space where you can relax, work, or connect with friends.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"backgroundColor":"white","className":"p-6 rounded-lg shadow-md"} -->
                        <div class="wp-block-group p-6 rounded-lg shadow-md has-white-background-color has-background">
                            <!-- wp:image {"width":50,"height":50,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('resources/images/icon-pastry.svg')); ?>" alt="Fresh Pastries" width="50" height="50"/></figure>
                            <!-- /wp:image -->
                            
                            <!-- wp:heading {"level":3,"textColor":"primary"} -->
                            <h3 class="wp-block-heading has-primary-color has-text-color">fresh pastries</h3>
                            <!-- /wp:heading -->
                            
                            <!-- wp:paragraph -->
                            <p>We offer a selection of freshly baked pastries and snacks to complement your coffee experience.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
