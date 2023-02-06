<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetViewVariablesMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::guard('manager')->user();
        if($user !== null) {
            $messages = $user->unreadMessages()->orderBy('id', 'DESC')->get();
            view()->share('messages', $messages);
        }

        return $next($request);
    }
}
