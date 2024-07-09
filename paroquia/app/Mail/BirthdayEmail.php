<?php

namespace App\Mail;

use App\Models\aniversariantes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BirthdayEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $niver;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( aniversariantes $niver)
    {
        $this->niver = $niver;
    }
    
    public function build()
    {
        return $this->view('emails.birthday')
                    ->with([
                        'name' => $this->niver->name,
                        'surname' => $this->niver->surname,
                    ]);
    }
    
    


   
}
