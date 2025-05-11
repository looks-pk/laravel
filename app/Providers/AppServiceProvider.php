<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set default string length for MySQL
        Schema::defaultStringLength(191);

        // Skip authentication during console commands (like migrations)
        if ($this->app->runningInConsole()) {
            $this->app['auth']->shouldUse(null);
        }

        // Your existing route handling logic
        $this->app->booted(function () {
            $router = $this->app['router'];
            $routes = $router->getRoutes()->getRoutes();
            $newRouteCollection = new \Illuminate\Routing\RouteCollection();
            
            foreach ($routes as $route) {
                if ($route->getName() === 'services.custom') {
                    continue;
                }
                $newRouteCollection->add($route);
            }
            
            $router->setRoutes($newRouteCollection);
            
            Route::fallback(function () {
                return response()->view('errors.404', [], 404);
            });
        });
    }
}