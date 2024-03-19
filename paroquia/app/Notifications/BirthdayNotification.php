<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BirthdayNotification extends Notification
{
    use Queueable;
    public $birthday;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct(Birthday $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
            ->subject('Feliz Aniversário!')
            ->greeting('Olá ' . $this->birthday->name . '!')
            ->line('Parabéns pelo seu aniversário. Desejamos a você um dia incrível!')
            ->line('Atenciosamente,')
            ->salutation('Equipe da Aplicação');
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
        ];
    }
}
