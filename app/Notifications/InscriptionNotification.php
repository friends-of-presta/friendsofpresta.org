<?php

namespace App\Notifications;

use App\Models\Inscription;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;

class InscriptionNotification extends Notification
{
    use Queueable;

    /**
     * The inscription instance.
     */
    protected $inscription;

    /**
     * Create a new notification instance.
     *
     * @param Inscription $inscription
     */
    public function __construct(Inscription $inscription)
    {
        $this->inscription = $inscription;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Get the slack representation of the notification.
     *
     * @param $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        $url = route('admin.inscription', ['inscription' => $this->inscription]);

        return (new SlackMessage)
            ->warning()
            ->attachment(function ($attachment) use ($url) {
                $attachment
                    ->title('Demande e-CommerceSolidaire n°' . $this->inscription->id, $url)
                    ->content($this->inscription->commentaires)
                    ->fields([
                        'Statut' => $this->inscription->statut,
                        'Societe' => $this->inscription->societe,
                        'CP' => $this->inscription->cp,
                        'Ville' => $this->inscription->ville
                    ]);
            });
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
