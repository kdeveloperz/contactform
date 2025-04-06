<?php

namespace Kacedeveloperz\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('kace_contactform.php')
        ], 'kace-contactform-config');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contactform');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
