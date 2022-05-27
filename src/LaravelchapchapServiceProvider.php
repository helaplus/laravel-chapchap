<?php

namespace Helaplus\Laravelchapchap;

use Illuminate\Support\ServiceProvider;

class LaravelchapchapServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'helaplus');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'helaplus');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/../routes/web.php');  

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelchapchap.php', 'laravelchapchap');

        // Register the service the package provides.
        $this->app->singleton('laravelchapchap', function ($app) {
            return new Laravelchapchap;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelchapchap'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelchapchap.php' => config_path('laravelchapchap.php'),
        ], 'laravelchapchap.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/helaplus'),
        ], 'laravelchapchap.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/helaplus'),
        ], 'laravelchapchap.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/helaplus'),
        ], 'laravelchapchap.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
