<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;

/* Protected Routes */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'user.type:admin'
    ]],
    function () {

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

        /* Profile routes */
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::put('/profile-password', [ProfileController::class, 'passwordUpdate'])->name('profile-password.update');
    });

/* Public Routes */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'guest',
],
    function () {

        Route::get('/login', [AuthController::class, 'login'])->name('login');

        Route::get('/forget-password', [AuthController::class, 'forgetPassword'])->name('password.request');
    });
