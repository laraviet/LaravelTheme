<?php

namespace Laraviet\LaravelTheme;

use Illuminate\Support\ServiceProvider;
use igaster\laravelTheme\Facades\Theme;
use Laraviet\DDDCore\DDDCoreServiceProvider;
use igaster\laravelTheme\themeServiceProvider;

class LaravelThemeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(DDDCoreServiceProvider::class);
        $this->app->register(themeServiceProvider::class);

        $this->app->alias("Theme", Theme::class);
    }
}