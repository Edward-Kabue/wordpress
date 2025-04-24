<?php
/**
 * Title: Coffee Ticker
 * Slug: twentytwentyfive/coffee-ticker
 * Categories: daily-grind
 * Keywords: coffee, ticker, scrolling
 * Description: A scrolling ticker displaying coffee types
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","width":"1px"}}},"backgroundColor":"accent-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-5-background-color has-background" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"scrolling-ticker-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignfull scrolling-ticker-box" style="padding-top:0;padding-bottom:0">
        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"scrolling-content"} -->
        <p class="scrolling-content" style="font-style:normal;font-weight:500">★ Espresso ★ Americano ★ Latte ★ Cappuccino ★ Mocha ★ Macchiato ★ Cold Brew ★ Espresso ★ Americano ★ Latte ★ Cappuccino ★ Mocha ★ Macchiato ★ Cold Brew</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
