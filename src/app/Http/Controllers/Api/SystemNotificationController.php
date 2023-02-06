<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SystemNotification;
use Symfony\Component\HttpFoundation\Response;

class SystemNotificationController extends Controller
{
    public function notified(SystemNotification $notification)
    {
        $notification->update([
            'is_read' => true
        ]);

        return response(['message' => 'success'], Response::HTTP_OK);
    }
}
