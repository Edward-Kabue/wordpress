<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;

class WooCommerceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        add_action('after_setup_theme', [$this, 'bootWooCommerce']);
        add_action('init', [$this, 'initWooCommerce'], 20);
    }

    /**
     * Boot WooCommerce basic support
     *
     * @return void
     */
    public function bootWooCommerce()
    {
        add_theme_support('woocommerce');
    }

    /**
     * Initialize WooCommerce features
     *
     * @return void
     */
    public function initWooCommerce()
    {
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
}