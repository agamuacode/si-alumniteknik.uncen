<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ImpersonateMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session()->has('impersonate')) {
            Auth::onceUsingId(session('impersonate'));
        }

        return $next($request);
    }
}

