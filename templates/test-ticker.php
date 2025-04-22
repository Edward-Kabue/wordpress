<?php
/**
 * Template Name: Test Ticker
 */

get_header();
?>

<div class="container">
    <h1>Ticker Test Page</h1>
    
    <?php 
    error_log('Test page - about to do shortcode');
    echo do_shortcode('[coffee_ticker]');
    error_log('Test page - after do_shortcode');
    ?>
</div>

<?php
get_footer();
?>