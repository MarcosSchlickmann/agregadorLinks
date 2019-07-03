<?php

namespace App\Http\Middleware;

use Closure;

class NotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(request()->user()->is_admin != 0)
            return redirect('/user');
        return $next($request);
    }
}
