<?php

use App\Http\Middleware\checkAge;
use App\Http\Middleware\CheckCountry;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        // $middleware->append(checkAge::class);
        $middleware->appendToGroup(
            'web',
            [
                checkAge::class,
                CheckCountry::class,
                // Add other middleware here if needed
            ]
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
