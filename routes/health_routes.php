<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get(
    '/health',
    function () {
        return response()->json(
            [
                'success' => true,
                'version' => config('version.info'),
            ],
            200
        );
    }
);

Route::get(
    '/health/db',
    function () {
        return response()->json(
            [
                'success' => true,
                'version' => config('version.info'),
            ],
            200
        );
    }
);

Route::get(
    '/clear-cache',
    function () {
        try {
            opcache_reset();
        } catch (Throwable $throw) {
        }
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return response()->json(
            [
                'success' => true,
                'version' => config('version.info'),
            ],
            200
        );
    }
);
