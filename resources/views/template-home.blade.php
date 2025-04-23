{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  <div class="home-page">
    {{-- Hero Section --}}
    <div class="hero parallaxie" @if($hero_bg = get_field('hero_background')) style="background-image: url('{{ is_array($hero_bg) ? $hero_bg['url'] : $hero_bg }}')" @endif>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-10">
            <div class="hero-content">
              <div class="section-title">
                <h3 class="wow fadeInUp">{{ get_field('hero_subtitle') ?: 'crafted with love, served with passion' }}</h3>
                <h1 class="text-anime-style-3" data-cursor="-opaque">{{ get_field('hero_title') ?: 'Step into the aroma of freshly coffee' }}</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ get_field('hero_description') ?: 'Discover a place where every cup is a masterpiece, crafted with passion and precision. From the rich, bold flavors of our signature blends to the cozy ambiance that feels like home.' }}</p>
              </div>
              
              <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                <a href="{{ get_field('discover_button_link') ?: '/about' }}" class="btn-default">{{ get_field('discover_button_text') ?: 'Discover coffee' }}</a>
                <a href="{{ get_field('book_button_link') ?: '/book-table' }}" class="btn-default btn-highlighted">{{ get_field('book_button_text') ?: 'book a table' }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Scrolling Ticker Section --}}
    <div class="our-scrolling-ticker">
      <div class="scrolling-ticker-box">
        <div class="scrolling-content">
          @if(have_rows('ticker_items'))
            @while(have_rows('ticker_items')) @php(the_row())
              <span><img src="{{ get_sub_field('icon')['url'] ?: get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">{{ get_sub_field('text') }}</span>
            @endwhile
          @else
            <span><img src="{{ get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">Espresso</span>
            <span><img src="{{ get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">Americano</span>
            <span><img src="{{ get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">Latte</span>
            {{-- Add more default items as needed --}}
          @endif
        </div>
        {{-- Duplicate for continuous scroll effect --}}
        <div class="scrolling-content">
          @if(have_rows('ticker_items'))
            @while(have_rows('ticker_items')) @php(the_row())
              <span><img src="{{ get_sub_field('icon')['url'] ?: get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">{{ get_sub_field('text') }}</span>
            @endwhile
          @else
            <span><img src="{{ get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">Espresso</span>
            <span><img src="{{ get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">Americano</span>
            <span><img src="{{ get_theme_file_uri('resources/images/asterisk-icon.svg') }}" alt="">Latte</span>
            {{-- Add more default items as needed --}}
          @endif
        </div>
      </div>
    </div>

    {{-- About Us Section --}}
    <div class="about-us">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-us-content">
              <div class="section-title">
                <h3 class="wow fadeInUp">{{ get_field('about_subtitle') }}</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ get_field('about_title') }}</h2>
              </div>
              
              <div class="about-body-list">
                @if(have_rows('about_features'))
                  @while(have_rows('about_features')) @php(the_row())
                    <div class="about-body-item wow fadeInUp" data-wow-delay="0.2s">
                      <div class="icon-box">
                        <img src="{{ get_sub_field('icon') }}" alt="">
                      </div>
                      <div class="about-body-list-content">
                        <h3>{{ get_sub_field('title') }}</h3>
                        <p>{{ get_sub_field('description') }}</p>
                      </div>
                    </div>
                  @endwhile
                @endif
              </div>

              <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                <div class="about-btn">
                  <a href="{{ get_field('about_button_link') }}" class="btn-default">{{ get_field('about_button_text') }}</a>
                </div>
                <div class="video-play-button">
                  <a href="{{ get_field('video_url') }}" class="popup-video" data-cursor-text="Play">
                    <i class="fa-solid fa-play"></i>
                  </a>
                  <p>watch video</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-us-image">
              <div class="about-us-img">
                <figure class="image-anime">
                  <img src="{{ get_field('about_image')['url'] }}" alt="{{ get_field('about_image')['alt'] }}">
                </figure>
              </div>
              
              <div class="opening-time-box">
                <div class="icon-box">
                  <i class="fa-regular fa-clock"></i>
                </div>
                <div class="opening-time-content">
                  <h3>{{ get_field('opening_hours_title') }}</h3>
                  <ul>
                    @if(have_rows('opening_hours'))
                      @while(have_rows('opening_hours')) @php(the_row())
                        <li>{{ get_sub_field('day') }}<span>{{ get_sub_field('hours') }}</span></li>
                      @endwhile
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Why Choose Us Section --}}
    @include('sections.why-choose-us')

    {{-- Intro Video Section --}}
    @include('sections.intro-video')
  </div>
@endsection

@push('scripts')
<script>
  // Initialize WOW.js
  new WOW().init();
  
  // Initialize Parallaxie
  $('.parallaxie').parallaxie({
    speed: 0.5,
    offset: 50
  });

  // Initialize text animation
  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    
    const splitText = new SplitText(".text-anime-style-3", {type:"chars"});
    const chars = splitText.chars;

    gsap.from(chars, {
      duration: 0.8,
      opacity:0,
      y:40,
      ease:"back.out",
      stagger: 0.02,
    });
  }
</script>
@endpush


