<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function map()
    {
        $routes = $this->getConfig('routes');

        foreach ($routes as $route) {
            $name = strtolower($route);
            Route::namespace($this->namespace . '\\' . $route)
                ->middleware([
                    'auth',
                    'test',
                ])
                ->group(base_path("routes/{$name}_routes.php"));
        }

        Route::namespace($this->namespace . '\\Auth')
            ->middleware([
                'authenticated',
                'test',
            ])
            ->group(base_path("routes/auth_routes.php"));

        Route::namespace($this->namespace . '\\Health')
            ->group(base_path("routes/health_routes.php"));

        Route::namespace($this->namespace . '\\Legacy')
            ->middleware([
                'auth',
                'test',
            ])
            ->group(base_path("routes/legacy_routes.php"));
    }

    public function getConfig(string $config)
    {
        return config($config);
    }
}
