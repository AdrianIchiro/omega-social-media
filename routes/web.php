<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;


// Default
Route::view('/', 'index', ['title' => 'Home'])->name('home');

// Auth group
Route::middleware('auth')->group(function() {
    Route::view('/profile', 'profile', ['title' => 'Profile'])->name('profile');
    Route::resource('posts', PostController::class);
    // Post Method
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Guest group
Route::middleware('guest')->group(function() {
    // Get Method
    Route::view('/register', 'register-form', ['title' => 'Register'])->name('register');
    Route::view('/login', 'login-form', ['title' => 'Login'])->name('login');

    // Post Method
    Route::post('/register', [AuthController::class, 'register'])->name('register-action');
    Route::post('/login', [AuthController::class, 'login'])->name('login-action');
});
