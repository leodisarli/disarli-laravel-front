<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'LoginController@process')
    ->name('login');

