<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\UserTypeMiddleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
//        then: function () {
//            Route::middleware('api')
//                ->prefix('admin')
//                ->name('admin.')
//                ->group(base_path('routes/admin.php'));
//        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'user.type' => UserTypeMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
