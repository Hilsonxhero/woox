<?php

namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;

class SmsChannel
{

    public function send($notifiable, Notification $notification)
    {
        try {
            $data = $notification->toSms();
            $message = $data['text'];
            $receptor = $data['phone'];
            $lineNumber = "10008566";
            $apiKey = config('services.sms.key');
            $api = new \Ghasedak\GhasedakApi($apiKey);
            $api->SendSimple($receptor, $message, $lineNumber);
        } catch (\Ghasedak\Exceptions\ApiException $e) {
            throw $e;
        } catch (\Ghasedak\Exceptions\HttpException $e) {
            throw $e;
        }
    }
}
