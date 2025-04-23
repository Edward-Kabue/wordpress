<section class="why-choose-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          @if($subtitle = get_field('why_choose_subtitle'))
            <h3 class="wow fadeInUp">{{ $subtitle }}</h3>
          @endif

          @if($title = get_field('why_choose_title'))
            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $title }}</h2>
          @endif
        </div>
      </div>
    </div>

    @if(have_rows('why_choose_items'))
      <div class="row features-grid">
        @while(have_rows('why_choose_items')) @php(the_row())
          <div class="col-lg-4 col-md-6">
            <div class="feature-item wow fadeInUp">
              @if($icon = get_sub_field('icon'))
                <div class="icon-box">
                  <img src="{{ $icon }}" alt="{{ get_sub_field('title') }}">
                </div>
              @endif

              <div class="feature-content">
                <h3>{{ get_sub_field('title') }}</h3>
                <p>{{ get_sub_field('description') }}</p>
              </div>
            </div>
          </div>
        @endwhile
      </div>
    @endif
  </div>
</section>