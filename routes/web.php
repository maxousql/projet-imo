<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'homepage'])->name('home.page');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'processLogin']);
