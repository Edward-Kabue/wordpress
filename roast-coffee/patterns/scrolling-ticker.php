<?php
/**
 * Title: Scrolling Ticker
 * Slug: roast/scrolling-ticker
 * Categories: featured
 */

$coffee_items = array(
    'Espresso',
    'Americano',
    'Latte',
    'Cappuccino',
    'Mocha',
    'Macchiato',
    'Cold Brew'
);
?>

<!-- wp:group {"className":"our-scrolling-ticker","layout":{"type":"constrained"}} -->
<div class="wp-block-group our-scrolling-ticker">
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <?php foreach ($coffee_items as $item) : ?>
                <div class="ticker-item">
                    <span class="asterisk">*</span>
                    <p><?php echo esc_html($item); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="scrolling-content" aria-hidden="true">
            <?php foreach ($coffee_items as $item) : ?>
                <div class="ticker-item">
                    <span class="asterisk">*</span>
                    <p><?php echo esc_html($item); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /wp:group -->



