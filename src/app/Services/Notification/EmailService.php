<?php

namespace App\Services\Notification;

use App\Mail\SendMail;
use App\Services\NotificationInterface;
use Mail;

class EmailService implements NotificationInterface
{
    public function send(array $message): void
    {
        Mail::to($message['to'])->send(new SendMail($message));
    }
}
