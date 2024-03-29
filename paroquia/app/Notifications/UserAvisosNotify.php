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
    private $warningTime;
    private $description;
    private $DateExecution;
    private $DateNotice;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title,$Address,$participants,$warningTime,$description,$DateExecution,$DateNotice )
    {
        //
        $this->title = $title;
        $this->Address = $Address;
        $this->participants = $participants;
        $this->warningTime = $warningTime;
        $this->description = $description;
        $this->DateExecution = $DateExecution;
        $this->DateNotice = $DateNotice;
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
            'participants' =>$this->participants,
            'warningTime'=>$this->warningTime,
            'description'=>$this->description,
            'DateExecution'=>$this->DateExecution ,
            'DateNotice'=>$this->DateNotice,
        ];
    }
}
