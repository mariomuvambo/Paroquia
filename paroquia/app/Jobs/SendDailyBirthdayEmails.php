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
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        \Mail::to($this->user->email)->send(new BirthdayEmail($this->user));

        // // Encontre todos os aniversariantes do dia
        // $aniversariantes = aniversariantes::whereMonth('date_birth', now()->format('m'))
        //     ->whereDay('date_birth', now()->format('d'))
        //     ->with('user') // Carrega os usuários associados aos aniversariantes
        //     ->get();
    
        // // Envie e-mails para cada aniversariante
        // foreach ($aniversariantes as $aniversariante) {
        //     $user = $aniversariante->user;
        //     if ($user) {
        //         Mail::to($user->email)->send(new BirthdayEmail($aniversariante));
        //     }
        // }
    }
    
}
