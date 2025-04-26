<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;


/* Protected Routes */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'user.type:admin'
    ]],
    function () {

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

    });


/* Public Routes */

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'guest',
    ],
    function () {

        Route::get('/login', [AuthController::class, 'login'])->name('login');
    });
