<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticated
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Closure
     */
    public function handle(Request $request, Closure $next)
    {
        if (1 == 1) {
            return redirect('/');
        }

        return $next($request);
    }
}
