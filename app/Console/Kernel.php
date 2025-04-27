<?php

namespace App\Console;

use App\Console\Commands\UpdateStockStatus;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
   


    protected function schedule(Schedule $schedule)
{
    // Schedule the stock update status command to run daily at midnight
    $schedule->command('stock:update-status')->dailyAt('00:00');
}

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // Load all the commands from the app/Console/Commands directory
        $this->load(__DIR__.'/Commands');

        // Register any other console routes you have
        require base_path('routes/console.php');
    }
}
