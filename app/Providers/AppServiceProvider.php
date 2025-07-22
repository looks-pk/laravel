<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register the Universal Mail Service
        $this->app->singleton(\App\Services\UniversalMailService::class, function ($app) {
            return new \App\Services\UniversalMailService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // No route manipulation needed - routes are handled in web.php
    }
}
