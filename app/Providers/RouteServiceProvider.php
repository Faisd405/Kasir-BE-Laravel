<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Str;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            $this->mapApiRoutes();
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    /**
     * Define the "api" routes for the application.
     */
    protected function mapApiRoutes(){
        // Map all routes in app/ServiceApps/{ServiceName}/routes/api.php
        $path = base_path('app/ServiceApps');

        // Get all directories in app/ServiceApps
        $directories = array_filter(glob($path . '/*'), 'is_dir');

        // Loop through all directories
        foreach ($directories as $directory) {
            // Get the directory name
            $directory = str_replace($path . '/', '', $directory);

            // Get the route path
            $routePath = base_path('app/ServiceApps/' . $directory . '/routes/api.php');

            // Check if the route path exists
            if (file_exists($routePath)) {

                // Map the route
                Route::middleware('api')
                    ->prefix('api/' . Str::slug(strtolower($directory), '-'))
                    ->group($routePath);
            }
        }
    }
}
