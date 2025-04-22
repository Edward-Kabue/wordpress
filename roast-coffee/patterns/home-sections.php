<?php
/**
 * Title: Home Sections
 * Slug: roast-coffee/home-sections
 * Categories: featured
 */
?>

<!-- wp:group {"className":"our-scrolling-ticker","layout":{"type":"constrained"}} -->
<div class="wp-block-group our-scrolling-ticker">
    <!-- wp:shortcode -->
    [coffee_ticker]
    <!-- /wp:shortcode -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"about-us","layout":{"type":"constrained"}} -->
<div class="wp-block-group about-us">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:columns {"className":"row align-items-center"} -->
        <div class="wp-block-columns row align-items-center">
            <!-- wp:column {"width":"50%","className":"col-lg-6"} -->
            <div class="wp-block-column col-lg-6" style="flex-basis:50%">
                <!-- wp:group {"className":"about-us-content"} -->
                <div class="wp-block-group about-us-content">
                    <!-- wp:group {"className":"section-title"} -->
                    <div class="wp-block-group section-title">
                        <!-- wp:heading {"level":3,"className":"wow fadeInUp"} -->
                        <h3 class="wow fadeInUp">about us</h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"className":"text-anime-style-3","attributes":{"data-cursor":"-opaque"}} -->
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Bringing people together, one cup at a time</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"about-body-list"} -->
                    <div class="wp-block-group about-body-list">
                        <!-- wp:group {"className":"about-body-item wow fadeInUp","attributes":{"data-wow-delay":"0.2s"}} -->
                        <div class="wp-block-group about-body-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- wp:image {"className":"icon-box"} -->
                            <figure class="wp-block-image icon-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-about-body-item-1.svg" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"about-body-list-content"} -->
                            <div class="wp-block-group about-body-list-content">
                                <!-- wp:heading {"level":3} -->
                                <h3>Food delivery</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>With our fast and reliable food delivery service, your favorite coffee, snacks, and treats are just a click away.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"about-body-item wow fadeInUp","attributes":{"data-wow-delay":"0.4s"}} -->
                        <div class="wp-block-group about-body-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- wp:image {"className":"icon-box"} -->
                            <figure class="wp-block-image icon-box">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-about-body-item-2.svg" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"about-body-list-content"} -->
                            <div class="wp-block-group about-body-list-content">
                                <!-- wp:heading {"level":3} -->
                                <h3>Event elegance</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>Host your special moments with us! From intimate gatherings to vibrant celebrations offers.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"about-us-footer wow fadeInUp","attributes":{"data-wow-delay":"0.6s"}} -->
                    <div class="wp-block-group about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                        <!-- wp:buttons {"className":"about-btn"} -->
                        <div class="wp-block-buttons about-btn">
                            <!-- wp:button {"className":"btn-default"} -->
                            <div class="wp-block-button btn-default">
                                <a class="wp-block-button__link" href="/about">More about us</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"className":"video-play-button"} -->
                        <div class="wp-block-group video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <p>watch video</p>
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%","className":"col-lg-6"} -->
            <div class="wp-block-column col-lg-6" style="flex-basis:50%">
                <!-- wp:group {"className":"about-us-image"} -->
                <div class="wp-block-group about-us-image">
                    <!-- wp:group {"className":"about-us-img"} -->
                    <div class="wp-block-group about-us-img">
                        <!-- wp:image {"className":"image-anime"} -->
                        <figure class="wp-block-image image-anime">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-us-image.jpg" alt=""/>
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"opening-time-box"} -->
                    <div class="wp-block-group opening-time-box">
                        <!-- wp:group {"className":"icon-box"} -->
                        <div class="wp-block-group icon-box">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"opening-time-content"} -->
                        <div class="wp-block-group opening-time-content">
                            <!-- wp:heading {"level":3} -->
                            <h3>Open hours</h3>
                            <!-- /wp:heading -->

                            <!-- wp:list -->
                            <ul>
                                <li>Monday - Friday<span>09:30 - 7:30</span></li>
                                <li>Saturday<span>10:30 - 5:00</span></li>
                                <li>Sunday<span>24 hours open</span></li>
                            </ul>
                            <!-- /wp:list -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
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

<!-- wp:group {"className":"why-choose-us light-bg-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group why-choose-us light-bg-section">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:columns {"className":"row"} -->
        <div class="wp-block-columns row">
            <!-- wp:column {"width":"50%","className":"col-lg-6"} -->
            <div class="wp-block-column col-lg-6" style="flex-basis:50%">
                <!-- wp:group {"className":"why-choose-content"} -->
                <div class="wp-block-group why-choose-content">
                    <!-- wp:group {"className":"section-title"} -->
                    <div class="wp-block-group section-title">
                        <!-- wp:heading {"level":3,"className":"wow fadeInUp"} -->
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"className":"text-anime-style-3","attributes":{"data-cursor":"-opaque"}} -->
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Where flavor meets comfort and services</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"className":"why-choose-btn wow fadeInUp","attributes":{"data-wow-delay":"0.2s"}} -->
                    <div class="wp-block-buttons why-choose-btn wow fadeInUp" data-wow-delay="0.2s">
                        <!-- wp:button {"className":"btn-default"} -->
                        <div class="wp-block-button btn-default">
                            <a class="wp-block-button__link" href="/contact">contact us</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%","className":"col-lg-6"} -->
            <div class="wp-block-column col-lg-6" style="flex-basis:50%">
                <!-- wp:group {"className":"why-choose-list wow fadeInUp","attributes":{"data-wow-delay":"0.2s"}} -->
                <div class="wp-block-group why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                    <?php
                    $why_choose_items = [
                        ['icon' => 'icon-why-choose-1.svg', 'title' => 'fully responsive', 'desc' => 'Designed to reduce allergens, dust, and pollutants, these systems create a healthier.'],
                        ['icon' => 'icon-why-choose-2.svg', 'title' => 'fresh ingredients', 'desc' => 'Designed to reduce allergens, dust, and pollutants, these systems create a healthier.'],
                        ['icon' => 'icon-why-choose-3.svg', 'title' => "exclusive chef's", 'desc' => 'Designed to reduce allergens, dust, and pollutants, these systems create a healthier.'],
                        ['icon' => 'icon-why-choose-4.svg', 'title' => 'fast services', 'desc' => 'Designed to reduce allergens, dust, and pollutants, these systems create a healthier.'],
                        ['icon' => 'icon-why-choose-5.svg', 'title' => 'friendly atmosphere', 'desc' => 'Designed to reduce allergens, dust, and pollutants, these systems create a healthier.'],
                        ['icon' => 'icon-why-choose-6.svg', 'title' => 'Free WIFI', 'desc' => 'Designed to reduce allergens, dust, and pollutants, these systems create a healthier.'],
                    ];

                    foreach ($why_choose_items as $item) :
                    ?>
                    <!-- wp:group {"className":"why-choose-item"} -->
                    <div class="wp-block-group why-choose-item">
                        <!-- wp:image {"className":"icon-box"} -->
                        <figure class="wp-block-image icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/<?php echo esc_attr($item['icon']); ?>" alt=""/>
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:roast-coffee/why-choose-item {
                            "title": "<?= esc_attr($item['title']) ?>",
                            "description": "<?= esc_attr($item['desc']) ?>"
                        } /-->
                    </div>
                    <!-- /wp:group -->
                    <?php endforeach; ?>
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

<!-- wp:group {"className":"intro-video parallaxie","layout":{"type":"constrained"}} -->
<div class="wp-block-group intro-video parallaxie">
    <!-- wp:group {"className":"container"} -->
    <div class="wp-block-group container">
        <!-- wp:columns {"className":"row align-items-center"} -->
        <div class="wp-block-columns row align-items-center">
            <!-- wp:column {"width":"66.66%","className":"col-lg-6 col-md-8"} -->
            <div class="wp-block-column col-lg-6 col-md-8" style="flex-basis:66.66%">
                <!-- wp:group {"className":"intro-video-content"} -->
                <div class="wp-block-group intro-video-content">
                    <!-- wp:group {"className":"section-title"} -->
                    <div class="wp-block-group section-title">
                        <!-- wp:heading {"level":3,"className":"wow fadeInUp"} -->
                        <h3 class="wow fadeInUp">our journey of success</h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"className":"text-anime-style-3","attributes":{"data-cursor":"-opaque"}} -->
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our coffee adventure, your favorite place</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33.33%","className":"col-lg-6 col-md-4"} -->
            <div class="wp-block-column col-lg-6 col-md-4" style="flex-basis:33.33%">
                <!-- wp:group {"className":"intro-video-box about-intro-video wow fadeInUp","attributes":{"data-wow-delay":"0.2s"}} -->
                <div class="wp-block-group intro-video-box about-intro-video wow fadeInUp" data-wow-delay="0.2s">
                    <!-- wp:group {"className":"video-play-button"} -->
                    <div class="wp-block-group video-play-button">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                            <i class="fa-solid fa-play"></i>
                        </a>
                        <p>watch video</p>
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"className":"row"} -->
        <div class="wp-block-columns row">
            <!-- wp:column {"width":"100%","className":"col-lg-12"} -->
            <div class="wp-block-column col-lg-12" style="flex-basis:100%">
                <!-- wp:group {"className":"intro-video-counters"} -->
                <div class="wp-block-group intro-video-counters">
                    <?php
                    $counter_items = [
                        ['icon' => 'icon-intro-video-counter-1.svg', 'count' => '300', 'text' => 'daily visitors'],
                        ['icon' => 'icon-intro-video-counter-2.svg', 'count' => '50', 'text' => 'recipe created'],
                        ['icon' => 'icon-intro-video-counter-3.svg', 'count' => '120', 'text' => 'events hosted'],
                        ['icon' => 'icon-intro-video-counter-4.svg', 'count' => '500', 'text' => 'happy customer'],
                    ];

                    foreach ($counter_items as $item) :
                    ?>
                    <!-- wp:group {"className":"video-counter-item"} -->
                    <div class="wp-block-group video-counter-item">
                        <!-- wp:image {"className":"icon-box"} -->
                        <figure class="wp-block-image icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/<?php echo esc_attr($item['icon']); ?>" alt=""/>
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"className":"video-counter-content"} -->
                        <div class="wp-block-group video-counter-content">
                            <!-- wp:heading {"level":2} -->
                            <h2><span class="counter"><?php echo esc_html($item['count']); ?></span>+</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php echo esc_html($item['text']); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <?php endforeach; ?>
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
