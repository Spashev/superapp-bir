<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScopeClientMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(!$request->user()->tokenCan('client')) {
            abort(Response::HTTP_UNAUTHORIZED, 'unauthorized');
        }
        return $next($request);
    }
}
