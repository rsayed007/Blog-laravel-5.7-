<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PendingPost extends Notification
{
    use Queueable;

    public $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
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
                    ->greeting('Hello Admin :)')
                    ->subject('Need to Approve New Post')
                    ->line('New post by'.$this->post->user->name.',Need to approve')
                    ->line('To approve the post click this publish button')
                    ->line('Post Title'.$this->post->title)
                    ->action('Publish', url(route('admin.post.show',$this->post->id)))
                    // action('View', url(route('author.post.show',$this->post->id)))
                    ->line('Thank you')
                    ->line($this->post->user->name);
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
