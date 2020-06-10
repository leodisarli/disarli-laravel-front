<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    protected $except = [
        '/health',
        '/health/db',
        '/health/clear-cache',
    ];
}
