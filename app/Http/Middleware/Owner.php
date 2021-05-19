<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Owner
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()&& Auth::user()->id == $request['user_id'] || (Auth::user()->admin ?? 0) == 1) {
            return $next($request);
        }
        else{
            abort(404, 'Вы не владелец, данной записи');
        }
    }
}
