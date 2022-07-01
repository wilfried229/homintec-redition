<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        Commands\SendDataReddition::class,
        Commands\GetValidation::class,
        Commands\getComptageChecked::class,
        Commands\getViolation::class,
        Commands\getAjustement::class,
        Commands\getDouanes::class,
        Commands\getPenalite::class,
        Commands\getDouanes::class,
        Commands\getLoging::class,
        Commands\LogAdmin::class,




    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)

    {
        ////$schedule->command('command:sendDataReddition')->everyMinute();
        $schedule->command('command:getvalidation')->everyMinute();
        $schedule->command('command:getComptageChecked')->everyMinute();
        $schedule->command('command:getViolation')->everyMinute();
        $schedule->command('command:getAjustement')->everyMinute();
        $schedule->command('command:getDouanes')->everyMinute();
        $schedule->command('command:getPenalite')->everyMinute();
        $schedule->command('command:getLoging')->everyMinute();

        $schedule->command('command:logAdmin')->everyMinute();


        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
