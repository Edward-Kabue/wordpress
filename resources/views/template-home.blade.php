{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  <div class="home-page">
    {{-- Hero Section --}}
    <section class="hero parallaxie" {!! get_field('hero_background') ? 'style="background-image: url(' . esc_url(get_field('hero_background')) . ')"' : '' !!}>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-10">
            <div class="hero-content">
              <div class="section-title">
                <h3 class="wow fadeInUp">{{ get_field('hero_subtitle') }}</h3>
                <h1 class="text-anime-style-3" data-cursor="-opaque">{{ get_field('hero_title') }}</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ get_field('hero_description') }}</p>
              </div>
              
              <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                @if($primary_button)
                  <a href="{{ $primary_button['url'] ?? '#' }}" class="btn-default" {!! $primary_button['target'] ? 'target="' . $primary_button['target'] . '"' : '' !!}>
                    {{ $primary_button['title'] ?? 'Learn More' }}
                  </a>
                @endif
                @if($secondary_button)
                  <a href="{{ $secondary_button['url'] ?? '#' }}" class="btn-default btn-highlighted" {!! $secondary_button['target'] ? 'target="' . $secondary_button['target'] . '"' : '' !!}>
                    {{ $secondary_button['title'] ?? 'Book a Table' }}
                  </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Scrolling Ticker Section --}}
    @if($coffee_items = get_field('coffee_items'))
    <div class="our-scrolling-ticker">
      <div class="scrolling-ticker-box">
        <div class="scrolling-content">
          @foreach($coffee_items as $item)
            <span>{!! wp_get_attachment_image(get_field('asterisk_icon', 'option'), 'full') !!}{{ $item['name'] }}</span>
          @endforeach
        </div>
        <div class="scrolling-content">
          @foreach($coffee_items as $item)
            <span>{!! wp_get_attachment_image(get_field('asterisk_icon', 'option'), 'full') !!}{{ $item['name'] }}</span>
          @endforeach
        </div>
      </div>
    </div>
    @endif

    {{-- About Us Section --}}
    <section class="about-us">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-us-content">
              <div class="section-title">
                <h3 class="wow fadeInUp">{{ get_field('about_subtitle') }}</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ get_field('about_title') }}</h2>
              </div>
              
              <div class="about-body-list">
                @if($features = get_field('about_features'))
                  @foreach($features as $feature)
                    <div class="about-body-item wow fadeInUp" data-wow-delay="0.2s">
                      <div class="icon-box">
                        {!! wp_get_attachment_image($feature['icon'], 'full') !!}
                      </div>
                      <div class="about-body-list-content">
                        <h3>{{ $feature['title'] }}</h3>
                        <p>{{ $feature['description'] }}</p>
                      </div>
                    </div>
                  @endforeach
                @endif
              </div>

              <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                @if($about_button = get_field('about_button'))
                  <div class="about-btn">
                    <a href="{{ $about_button['url'] }}" class="btn-default">{{ $about_button['title'] }}</a>
                  </div>
                @endif
                
                @if($video_url = get_field('about_video_url'))
                  <div class="video-play-button">
                    <a href="{{ $video_url }}" class="popup-video" data-cursor-text="Play">
                      <i class="fa-solid fa-play"></i>
                    </a>
                    <p>watch video</p>
                  </div>
                @endif
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-us-image">
              <div class="about-us-img">
                <figure class="image-anime">
                  {!! wp_get_attachment_image(get_field('about_image'), 'full') !!}
                </figure>
              </div>
              
              <div class="opening-time-box">
                <div class="icon-box">
                  <i class="fa-regular fa-clock"></i>
                </div>
                
                <div class="opening-time-content">
                  <h3>{{ get_field('opening_hours_title') }}</h3>
                  @if($opening_hours = get_field('opening_hours'))
                    <ul>
                      @foreach($opening_hours as $hours)
                        <li>{{ $hours['days'] }}<span>{{ $hours['time'] }}</span></li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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




