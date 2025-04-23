<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;
use Illuminate\Support\Facades\View;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Bind sage.view to the container
        $this->app->bind('sage.view', function () {
            return View::getFacadeRoot();
        });

        // Bind sage.data to the container
        $this->app->bind('sage.data', function () {
            return [];
        });
    }
}

