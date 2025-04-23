<div class="col-lg-3 col-md-6">
  <div class="product-card wow fadeInUp">
    <div class="product-image">
      {!! woocommerce_get_product_thumbnail() !!}
      
      <div class="product-actions">
        <button class="add-to-wishlist" data-cursor="-opaque">
          <i class="far fa-heart"></i>
        </button>
        @if($product->is_purchasable() && $product->is_in_stock())
          <a href="{{ $product->add_to_cart_url() }}" class="add-to-cart" data-cursor="-opaque">
            <i class="fas fa-shopping-cart"></i>
          </a>
        @endif
        <a href="{{ get_permalink() }}" class="view-details" data-cursor="-opaque">
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>

      @if($product->is_on_sale())
        <span class="sale-badge">-{{ round((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100) }}%</span>
      @endif
    </div>

    <div class="product-info">
      <h3><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h3>
      <div class="price">
        {!! $product->get_price_html() !!}
      </div>
      @if($product->get_rating_count() > 0)
        <div class="rating">
          {!! wc_get_rating_html($product->get_average_rating(), $product->get_rating_count()) !!}
        </div>
      @endif
    </div>
  </div>
</div>