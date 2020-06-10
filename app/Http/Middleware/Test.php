<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Test
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Closure
     */
    public function handle(Request $request, Closure $next)
    {
        // echo 'test'.PHP_EOL;

        return $next($request);
    }
}
