<?php

namespace App\Console\Commands;

use App\Models\aniversariantes;
use App\Notifications\BirthdayNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendBirthdayNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:send-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send birthday notifications';

    /**
     * Execute the console command.
     *
     * @return int
     */   

     public function handle()
     {
         $today = now()->format('m-d');
         $birthdays = aniversariantes::whereRaw("DATE_FORMAT(date_birth, '%m-%d') = '{$today}'")->get();
 
         foreach ($birthdays as $birthday) {
             Mail::to($birthday->email)->send(new BirthdayNotification($birthday));
         }
 
         $this->info('Birthday notifications sent successfully.');
     }
}
