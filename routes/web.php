<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ProfileController;


Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard'); // user.dashboard
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index'); // user.dashboard
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update'); // user.dashboard

});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
