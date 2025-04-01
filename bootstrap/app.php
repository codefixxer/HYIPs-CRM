<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Controllers\Admin\TransactionController;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
         $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
         ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
         //
    })
    // Add the scheduling functionality here
    ->withSchedule(function (Schedule $schedule) {
        // Schedule the daily profit calculation task
     //    $schedule->call(function () {
     //      \App\Http\Controllers\Admin\TransactionController::calculateDailyProfit();
     //    })->daily(); 
     $schedule->call(function () {
          TransactionController::calculateDailyProfit();
      })->daily();
      

    })
    ->create();
