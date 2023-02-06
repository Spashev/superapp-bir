<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedManager
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('manager')->check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
