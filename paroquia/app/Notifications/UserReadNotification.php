<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserReadNotification extends Notification
{
    use Queueable;
    private $title;
    private $participants; 
    private $address;  
    private $description; 
    private $date_execution; 
    private $date_notice; 
    private $warningTime; 

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title, $participants, $description, $address, $date_execution, $date_notice, $warningTime)
    {
        //
        $this->title = $title;
        $this->participants = $participants;
        $this->address = $address;
        $this->description = $description;
        $this->date_execution = $date_execution;
        $this->date_notice = $date_notice;
        $this->warningTime = $warningTime;
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

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
           'title'=> $this-> title,
           'participants' =>  $this ->participants,
           'address' =>  $this ->address,
           'description' =>   $this -> description,
           'date_execution' =>   $this -> date_execution,
           'date_notice' =>  $this ->date_notice,
           'warningTime' =>  $this ->warningTime,
        ];
    }
}
