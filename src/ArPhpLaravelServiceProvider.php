<?php

namespace AtmCode\ArPhpLaravel;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;
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

        /**
         * Query Builder Macro for search where in arabic letters.
         */
        Builder::macro('searchAr', function ($search, $field, $mode = 'OR') {
            return Macroables::setSearchWheres($this, $search, $field, $mode);
        });

        /**
         * Query Builder Macro for order by arabic letters.
         */
        Builder::macro('orderAr', function ($search, $field) {
            return Macroables::setSearchOrder($this, $search, $field);
        });

        /**
         * Eloquent Builder Macro for search where in arabic letters.
         */
        EloquentBuilder::macro('searchAr', function ($search, $field, $mode = 'OR') {
            return Macroables::setSearchWheres($this, $search, $field, $mode);
        });

        /**
         * Eloquent Builder Macro for order by arabic letters.
         */
        EloquentBuilder::macro('orderAr', function ($search, $field) {
            return Macroables::setSearchOrder($this, $search, $field);
        });
    }
}
