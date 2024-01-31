<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', 'App\Http\Controllers\RouteController@MainView');

Route::get('/first-route', function () {
    return view('first-route');
});

Route::get('/seconde-route', function () {
    return view('seconde-route');
});

Route::get('/third-route', function () {
    return view('third-route');
});
