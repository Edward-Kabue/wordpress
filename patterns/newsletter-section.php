<?php
/**
 * Title: Newsletter Section
 * Slug: grind/newsletter-section
 * Categories: grind, featured
 * Keywords: newsletter, subscribe
 */
?>

<!-- wp:group {"backgroundColor":"primary","textColor":"white","className":"newsletter-section py-12","layout":{"type":"constrained"}} -->
<div class="wp-block-group newsletter-section py-12 has-white-color has-primary-background-color has-text-color has-background">
    <!-- wp:group {"className":"container text-center","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container text-center">
        <!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","className":"font-secondary mb-4"} -->
        <h2 class="wp-block-heading has-text-align-center font-secondary mb-4 has-white-color has-text-color">Subscribe to Our Newsletter</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","className":"mb-6 max-w-2xl mx-auto"} -->
        <p class="has-text-align-center mb-6 max-w-2xl mx-auto">Stay updated with our latest offers, new coffee arrivals, and exclusive promotions.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:group {"className":"max-w-lg mx-auto","layout":{"type":"constrained"}} -->
        <div class="wp-block-group max-w-lg mx-auto">
            <!-- wp:mailchimp-for-wp/form {"id":123} -->
            <div class="wp-block-mailchimp-for-wp-form">[mc4wp_form id="123"]</div>
            <!-- /wp:mailchimp-for-wp/form -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
