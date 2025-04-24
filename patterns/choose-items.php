<?php
/**
 * Title: Choose Items
 * Slug: twentytwentyfive/choose-items
 * Categories: daily-grind
 * Keywords: coffee, items, products, selection
 * Description: A section for choosing coffee items
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"choose-items","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull choose-items" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"choose-items-heading"} -->
    <h2 class="wp-block-heading has-text-align-center choose-items-heading" style="margin-bottom:var(--wp--preset--spacing--50)">Choose Your Coffee</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)">Select from our wide range of premium coffee beans and brewing methods</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","className":"choose-items-container"} -->
    <div class="wp-block-columns alignwide choose-items-container">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"accent-6","className":"choose-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group choose-item has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":150,"height":150,"scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"choose-item-image"} -->
                <figure class="wp-block-image aligncenter size-medium is-resized choose-item-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/coffee-beans.jpg')); ?>" alt="Coffee Beans" width="150" height="150" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Coffee Beans</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Choose from our selection of single-origin and blended coffee beans.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Select</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"accent-6","className":"choose-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group choose-item has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":150,"height":150,"scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"choose-item-image"} -->
                <figure class="wp-block-image aligncenter size-medium is-resized choose-item-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/brewing-method.jpg')); ?>" alt="Brewing Method" width="150" height="150" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Brewing Method</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Select your preferred brewing method for the perfect cup of coffee.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Select</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"accent-6","className":"choose-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group choose-item has-border-color has-accent-6-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":150,"height":150,"scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"choose-item-image"} -->
                <figure class="wp-block-image aligncenter size-medium is-resized choose-item-image"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/coffee-accessories.jpg')); ?>" alt="Coffee Accessories" width="150" height="150" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Accessories</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Browse our collection of coffee accessories to enhance your brewing experience.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Select</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
