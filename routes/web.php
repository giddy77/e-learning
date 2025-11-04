<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('register', [RegisterController::class, 'store'])->name('auth.register.store');
Route::get('login', [LoginController::class, 'index'])->name('auth.login');