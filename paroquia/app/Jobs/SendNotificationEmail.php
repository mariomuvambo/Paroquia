<?php

namespace App\Jobs;

use App\Models\avisos;
use App\Models\User;
use App\Notifications\UserAvisosNotify;
use App\Notifications\UserReadNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNotificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $notificationData;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $notificationData)
    {
        $this->notificationData = $notificationData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $notification = avisos::create($this->notificationData);

        // Notify all users about the new notification
        $users = User::all();
        Notification::send($users, new UserReadNotification(
            $this->notificationData['title'],
            $this->notificationData['participants'],
            $this->notificationData['description'],
            $this->notificationData['address'],
            $this->notificationData['date_execution'],
            $this->notificationData['date_notice'],
            $this->notificationData['warningTime']
        ));

        foreach ($users as $user) {
            $user->notify(new UserAvisosNotify($notification));
        }
    }
}
