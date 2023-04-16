<?php

namespace App\Console;

use App\Mail\ReservationReminderMail;
use App\Models\JetskiUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {

            $reservations = JetskiUser::whereDate('date_in', Carbon::tomorrow())->get();
    
            foreach ($reservations as $reservation) {
     
                $email = User::where('id',$reservation->user_id)->value('email');
                $name = User::where('id',$reservation->user_id)->value('name');
                Mail::to($email)->send(new ReservationReminderMail($reservation,$name));
            }
        })->dailyAt('09:00'); // Envía el correo diariamente a las 9:00 a.m. 
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }




}
