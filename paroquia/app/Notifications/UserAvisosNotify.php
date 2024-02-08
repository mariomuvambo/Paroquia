<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserAvisosNotify extends Notification
{
    use Queueable;
    private $title;
    private $Address;
    private $participants;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title,$Address,$participants )
    {
        //
        $this->title = $title;
        $this->Address = $Address;
        $this->participants = $participants;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            //
            'title' =>$this->title,
            'Address' =>$this->Address,
            'participants' =>$this->participants
        ];
    }
}
