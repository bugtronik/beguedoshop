<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\ { Ad, Message };

class MessageApprove extends Notification
{
    use Queueable;

    protected $ad;
    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Ad $ad, Message $message)
    {
        $this->ad = $ad;
        $this->message = $message;
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
                ->line('Nous avons approuvé ce message que vous avez déposé pour une annonce :')
                ->line('--------------------------------------')
                ->line(json_encode($this->message->texte))
                ->line('--------------------------------------')
                ->action('Voir cette annonce', route('annonces.show', json_encode($this->ad->id)))
                ->line("Merci d'utiliser notre site !");
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
