<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['user.type:admin']], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

});


Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
