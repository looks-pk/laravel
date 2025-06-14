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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Add a hook to completely disable any wildcard routes named 'services.custom'
        $this->app->booted(function () {
            // Access the router instance
            $router = $this->app['router'];
            
            // Get all routes
            $routes = $router->getRoutes()->getRoutes();
            
            // Create a new route collection without the problematic route
            $newRouteCollection = new \Illuminate\Routing\RouteCollection();
            
            foreach ($routes as $route) {
                // Skip the problematic route
                if ($route->getName() === 'services.custom') {
                    continue;
                }
                
                // Add all other routes back
                $newRouteCollection->add($route);
            }
            
            // Replace the router's route collection
            $router->setRoutes($newRouteCollection);
            
            // Add a proper fallback route for 404 errors
            Route::fallback(function () {
                return response()->view('errors.404', [], 404);
            });
        });
    }
}
