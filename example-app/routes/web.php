<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first-route', function () {
    return view('first-route');
});

Route::get('/seconde-route', function () {
    return view('seconde-route');
});

Route::get('/third-route', function () {
    return view('third-route');
});
