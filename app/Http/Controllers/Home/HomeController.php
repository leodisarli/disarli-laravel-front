<?php

namespace App\Http\Controllers\Home;

use App\Exceptions\Custom\UnauthorizedException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function process(Request $request): View
    {
        // throw new UnauthorizedException();
        return view('home/home');
    }
}
