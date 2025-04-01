<?php

namespace App\Console;

use App\Console\Commands\Inspire;
use Illuminate\Console\Scheduling\Schedule;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void 
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
           TransactionController::calculateDailyProfit();
        })->everyMinute();
    }
    

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // Register the default set of Artisan commands
        $this->load(__DIR__.'/Commands');

        // Include the routes for the Artisan console commands
        require base_path('routes/console.php');
    }
}
