<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\RouteController@MainView');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');