<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name = 'home';

Route::get('test', function () {
    return view('pages.test');
}) -> name = 'test';