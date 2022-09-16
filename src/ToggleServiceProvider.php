<?php

namespace Laraveldesign\Toggle;

use Illuminate\Support\ServiceProvider;

class ToggleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'toggle');

        if ($this->app->runningInConsole()) {

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/toggle'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'toggle');

        // Register the main class to use with the facade
        $this->app->singleton('toggle', function () {
            return new Toggle;
        });
    }
}
