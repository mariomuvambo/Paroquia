<?php

namespace App\Jobs;

use App\Mail\BirthdayEmail;
use App\Models\aniversariantes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendDailyBirthdayEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        // Encontre todos os aniversariantes do dia
        $aniversariantes = aniversariantes::whereMonth('date_birth', now()->format('m'))
            ->whereDay('date_birth', now()->format('d'))
            ->get();

        // Envie e-mails para cada aniversariante
        foreach ($aniversariantes as $aniversariante) {
            Mail::to($aniversariante->email)->send(new BirthdayEmail($aniversariante));
        }
        
    }
}
