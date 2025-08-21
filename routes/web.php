<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Signup;
use App\Http\Controllers\Signin;
use App\Http\Controllers\OrderController;
use App\Models\Project;



Route::middleware('guest')->group(function () {
    Route::get('/signin', [Signin::class, 'signin'])->name('signin');
    Route::post('/signin', [Signin::class, 'login'])->name('signin.post');
    Route::get('/signup', [Signup::class, 'signup'])->name('signup');
    Route::post('/register', [Signup::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [IndexController::class, 'index'])->name('home');
    Route::post('/logout', [Signin::class, 'logout'])->name('logout');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
});

Route::get('/', function () {
    return redirect()->route(auth()->check() ? 'home' : 'signin');
});

