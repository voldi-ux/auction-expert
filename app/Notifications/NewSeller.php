<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewSeller extends Notification
{
    use Queueable;
     
    /**
     * Create a new notification instance.
     */
    public function __construct( public User $user, public String $password)
    {
   
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->subject("Congratulation!")
                    ->line('You have been successfully loaded onto the system.')
                    ->line('Email: '.$this->user->email)
                    ->line('Temporary Password: '.$this->password)
                    ->action('click here to login', route("login"));
                   
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
