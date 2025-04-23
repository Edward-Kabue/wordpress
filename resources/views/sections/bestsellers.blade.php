@php
  $show_bestsellers = false;
  add_action('wp', function() use (&$show_bestsellers) {
      $show_bestsellers = class_exists('WooCommerce');
  });
@endphp

@if($show_bestsellers)
  <section class="bestsellers">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h3 class="wow fadeInUp">ONLINE SHOP</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">Our bestsellers</h2>
          </div>
        </div>
      </div>

      <div class="row">
        @php
          $args = array(
              'post_type' => 'product',
              'posts_per_page' => 8,
              'meta_key' => 'total_sales',
              'orderby' => 'meta_value_num',
              'order' => 'DESC',
          );
          $loop = new WP_Query($args);
        @endphp

        @if($loop->have_posts())
          @while($loop->have_posts())
            @php
              $loop->the_post();
              global $product;
              
              if (!is_a($product, 'WC_Product')) {
                  $product = wc_get_product(get_the_ID());
              }
              
              if (!$product) {
                  continue;
              }
            @endphp
            
            @include('partials.product-card')
          @endwhile
          @php(wp_reset_postdata())
        @endif
      </div>
    </div>
  </section>
@endif


