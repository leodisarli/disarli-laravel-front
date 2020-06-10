<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Closure
     */
    public function handle(Request $request, Closure $next)
    {
        if (1 == 2) {
            return redirect('/login');
        }

        return $next($request);
    }
}
