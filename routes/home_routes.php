<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@process')
    ->name('home');
