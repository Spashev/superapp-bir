<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class ManagerAuthenticate
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('manager')->check()){
            return redirect('/admin/signin');
        }

        return $next($request);
    }
}
