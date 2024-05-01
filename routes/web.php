<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Get Method
Route::view('/', 'index', ['title' => 'Home'])->name('home');
Route::view('/register', 'register-form')->name('register');
Route::view('/login', 'login-form')->name('login');
Route::view('/posts', 'posts')->name('posts')->middleware('auth');
Route::view('/profile', 'profile')->name('profile');


// Post Method
Route::post('/register', [AuthController::class, 'register'])->name('register-action');
Route::post('/login', [AuthController::class, 'login'])->name('login-action');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
