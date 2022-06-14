<?php

namespace App\Notifications;

use App\Notifications\Channels\SmsChannel;
use App\Services\VerifyCodeService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyPhoneNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $phone;
    public $code;

    public function __construct($phone,$code)
    {
        $this->phone = $phone;
        $this->code = $code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsChannel::class];
    }


    public function toSms()
    {
        return [
            'text' => " کد فعال سازی {$this->code}",
            'phone' => $this->phone
        ];
    }

}
