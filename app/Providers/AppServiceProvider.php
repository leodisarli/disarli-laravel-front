<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()  
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        if (config('app.env') === 'local') {
            try {
                opcache_reset();
            } catch (Throwable $throw) {
                Log::warning('warning opcache is not installed');
            }
        }
    }
}
