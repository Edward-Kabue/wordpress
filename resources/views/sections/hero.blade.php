<div class="hero parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">
                            {{ get_field('hero_subtitle') ?: 'crafted with love, served with passion' }}
                        </h3>
                        <h1 class="text-anime-style-3" data-cursor="-opaque">
                            {{ get_field('hero_title') ?: 'Step into the aroma of freshly coffee' }}
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            {{ get_field('hero_description') ?: 'Discover a place where every cup is a masterpiece, crafted with passion and precision. From the rich, bold flavors of our signature blends to the cozy ambiance that feels like home.' }}
                        </p>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ get_field('discover_coffee_link') ?: 'about.html' }}" class="btn-default">
                            {{ get_field('discover_coffee_text') ?: 'Discover coffee' }}
                        </a>
                        <a href="{{ get_field('book_table_link') ?: 'book-table.html' }}" class="btn-default btn-highlighted">
                            {{ get_field('book_table_text') ?: 'book a table' }}
                        </a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
</div>

