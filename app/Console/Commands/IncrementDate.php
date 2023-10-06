<?php

namespace App\Console\Commands;

use App\Models\ScheduledClass;
use Illuminate\Console\Command;

class IncrementDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:increment-date {--days=1}';

    // run the signature command in console
    // php artisan app:increment-date --days = numberofdays

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment all the scheduled classes dates.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $scheduledClasses = ScheduledClass::latest('date_time')->get();
        $scheduledClasses->each(function($class) {
            // Use default of 1 day if user doesnt specify from signature (line 15)
            $class->date_time = $class->date_time->addDays($this->option('days'));
            $class->save();
        });
    }
}
