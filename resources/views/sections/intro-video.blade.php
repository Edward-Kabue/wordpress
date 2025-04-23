<div class="intro-video parallaxie">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-8">
        <div class="intro-video-content">
          <div class="section-title">
            <h3 class="wow fadeInUp">{{ get_field('intro_video_subtitle') }}</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ get_field('intro_video_title') }}</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-4">
        <div class="intro-video-box about-intro-video wow fadeInUp" data-wow-delay="0.2s">
          <div class="video-play-button">
            <a href="{{ get_field('intro_video_url') }}" class="popup-video" data-cursor-text="Play">
              <i class="fa-solid fa-play"></i>
            </a>
            <p>watch video</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="intro-video-counters">
          @if(have_rows('counter_items'))
            @while(have_rows('counter_items')) @php(the_row())
              <div class="video-counter-item">
                <div class="icon-box">
                  <img src="{{ get_sub_field('icon') }}" alt="">
                </div>
                <div class="video-counter-content">
                  <h2><span class="counter">{{ get_sub_field('number') }}</span>{{ get_sub_field('suffix') }}</h2>
                  <p>{{ get_sub_field('label') }}</p>
                </div>
              </div>
            @endwhile
          @endif
        </div>
      </div>
    </div>
  </div>
</div>