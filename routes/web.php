<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');

Route::get('test', 'TestController@test') -> name('test');