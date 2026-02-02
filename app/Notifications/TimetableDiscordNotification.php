<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Discord\DiscordChannel;
use NotificationChannels\Discord\DiscordMessage;

class TimetableDiscordNotification extends Notification
{
    use Queueable;

    public $items;
    public $startDate;
    public $endDate;

    public function __construct($items, $startDate, $endDate)
    {
        $this->items = $items;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function via($notifiable)
    {
        return [DiscordChannel::class];
    }

    public function toDiscord($notifiable)
    {
        $message = "━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $message .= "**Tunniplaan: {$this->startDate} - {$this->endDate}**\n";
        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";

        foreach ($this->items as $day => $lessons) {
            $message .= "**{$day}**\n";
            
            foreach ($lessons as $lesson) {
                $message .= "• {$lesson['start']}-{$lesson['end']} | {$lesson['name']}";
                if (!empty($lesson['room'])) {
                    $message .= " | Klass: {$lesson['room']}";
                }
                $message .= "\n";
            }
            
            $message .= "\n";
        }

        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━";

        return DiscordMessage::create($message);
    }
}