<?php

namespace AtmCode\ArPhpLaravel;

use Illuminate\Support\ServiceProvider;

class ArPhpLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'arPhpLaravel');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('ar-php-laravel', function () {
            return new ArPhpLaravel();
        });
    }
}
