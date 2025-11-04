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
Route::post('login', [LoginController::class, 'store'])->name('auth.login.store');
Route::get('dashboard', function () {
    return view('dashboards.student');
})->middleware('auth')->name('dashboard');
Route::get('profile', function () {
    return view('profile.student');
})->middleware('auth')->name('profile');