<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Hash;

class SuccessfullySignedUp extends Notification
{
    use Queueable;

    private $name, $link;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($visitor)
    {
        $this->name = $visitor->name;
        $this->link = route('newsletter-confirm', ['user' => $visitor->id,'hash' => md5($visitor->created_at)]);
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
            ->subject("Potwierdzenie adresu email")
            ->markdown('mails.signedup', ['name' => $this->name, 'link' => $this->link]);
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
