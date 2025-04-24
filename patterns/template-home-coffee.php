<?php
/**
<<<<<<< HEAD
 * Template Name: Home Coffee Template
 */

get_header(); ?>

<!-- Hero Section Start -->
<div class="hero parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10">
                <div class="hero-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo get_field('hero_subtitle'); ?></h3>
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo get_field('hero_title'); ?></h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo get_field('hero_description'); ?></p>
                    </div>
                    
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="<?php echo get_field('discover_button_link'); ?>" class="btn-default"><?php echo get_field('discover_button_text'); ?></a>
                        <a href="<?php echo get_field('book_button_link'); ?>" class="btn-default btn-highlighted"><?php echo get_field('book_button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <?php
            if(have_rows('ticker_items')):
                while(have_rows('ticker_items')) : the_row(); ?>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/asterisk-icon.svg" alt=""><?php echo get_sub_field('item_text'); ?></span>
                <?php endwhile;
            endif; ?>
        </div>
        <div class="scrolling-content">
            <?php
            if(have_rows('ticker_items')):
                while(have_rows('ticker_items')) : the_row(); ?>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/asterisk-icon.svg" alt=""><?php echo get_sub_field('item_text'); ?></span>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>

<!-- About us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo get_field('about_subtitle'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo get_field('about_title'); ?></h2>
                    </div>
                    
                    <div class="about-body-list">
                        <?php if(have_rows('about_features')):
                            while(have_rows('about_features')) : the_row(); ?>
                                <div class="about-body-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box">
                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                    </div>
                                    <div class="about-body-list-content">
                                        <h3><?php echo get_sub_field('title'); ?></h3>
                                        <p><?php echo get_sub_field('description'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                    
                    <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                        <div class="about-btn">
                            <a href="<?php echo get_field('about_button_link'); ?>" class="btn-default"><?php echo get_field('about_button_text'); ?></a>
                        </div>
                        <div class="video-play-button">
                            <a href="<?php echo get_field('video_url'); ?>" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <p><?php echo get_field('video_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-us-image">
                    <div class="about-us-img">
                        <figure class="image-anime">
                            <img src="<?php echo get_field('about_image'); ?>" alt="">
                        </figure>
                    </div>
                    
                    <div class="opening-time-box">
                        <div class="icon-box">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="opening-time-content">
                            <h3>Open hours</h3>
                            <ul>
                                <?php if(have_rows('opening_hours')):
                                    while(have_rows('opening_hours')) : the_row(); ?>
                                        <li><?php echo get_sub_field('day'); ?><span><?php echo get_sub_field('hours'); ?></span></li>
                                    <?php endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section Start -->
<div class="why-choose-us light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo get_field('why_choose_subtitle'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo get_field('why_choose_title'); ?></h2>
                    </div>
                    <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="<?php echo get_field('contact_button_link'); ?>" class="btn-default"><?php echo get_field('contact_button_text'); ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                    <?php if(have_rows('why_choose_items')):
                        while(have_rows('why_choose_items')) : the_row(); ?>
                            <div class="why-choose-item">
                                <div class="icon-box">
                                    <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3><?php echo get_sub_field('title'); ?></h3>
                                    <p><?php echo get_sub_field('description'); ?></p>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
=======
 * Title: Coffee Shop Home Template
 * Slug: twentytwentyfour/template-home-coffee
 * Template Types: front-page, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
  <!-- wp:pattern {"slug":"twentytwentyfour/hero-coffee"} /-->
  
  <!-- wp:post-content {"layout":{"inherit":true}} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
>>>>>>> 130b0e2c9b6531d45edc2ee74f396d5a6935d62b
