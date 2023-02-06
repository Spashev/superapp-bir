<?php

namespace App\Observers;

use App\Jobs\EmailJob;
use App\Models\Manager;

class ManagerObserver
{
    public function created(Manager $manager)
    {
        $message = [
            'to' => 'bir.admin@bir.com',
            'body' => 'New account: ' . $manager->full_name,
            'from' => $manager->email,
            'name' => $manager->full_name,
            'subject' => 'New account'
        ];

        dispatch( new EmailJob($message));
    }
}
