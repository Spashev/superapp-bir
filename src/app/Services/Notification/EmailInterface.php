<?php

namespace App\Services\Notification;

interface EmailInterface
{
    public function send(string $body);
}
