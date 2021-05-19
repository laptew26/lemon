<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return back();
        }
        else{
            return $next($request);
        }
    }
}
