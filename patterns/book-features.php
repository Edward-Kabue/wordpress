<?php
/**
 * Title: Book Features
 * Slug: twentytwentyfive/book-features
 * Categories: daily-grind
 * Keywords: coffee, book, features
 * Description: A section showcasing book features
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent-5","className":"book-features","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull book-features has-accent-5-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"book-features-heading"} -->
    <h2 class="wp-block-heading has-text-align-center book-features-heading" style="margin-bottom:var(--wp--preset--spacing--50)">Book Your Table</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","className":"book-features-container"} -->
    <div class="wp-block-columns alignwide book-features-container">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"base","className":"book-feature-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group book-feature-item has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-reservation.svg')); ?>" alt="Reservation Icon" width="60" height="60" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Easy Reservations</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Book your table in just a few clicks, with instant confirmation and reminders.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"base","className":"book-feature-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group book-feature-item has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-seating.svg')); ?>" alt="Seating Icon" width="60" height="60" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Preferred Seating</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Choose your favorite spot, whether it's by the window, in a cozy corner, or on our outdoor patio.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"base","className":"book-feature-item","layout":{"type":"constrained"}} -->
            <div class="wp-block-group book-feature-item has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"align":"center","width":60,"height":60,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon-special.svg')); ?>" alt="Special Events Icon" width="60" height="60" style="object-fit:cover"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Special Events</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Planning a celebration? We offer special arrangements for birthdays, anniversaries, and business meetings.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
        <!-- wp:button {"backgroundColor":"accent-3","textColor":"base"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-3-background-color has-text-color has-background wp-element-button">Book Now</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
