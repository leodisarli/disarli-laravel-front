<?php

namespace App\Http\Controllers\Legacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegacyController extends Controller
{
    public function process(Request $request)
    {
        $uri = 'http://localhost:8083' . $request->getRequestUri();
        return redirect()->away($uri);
    }
}
