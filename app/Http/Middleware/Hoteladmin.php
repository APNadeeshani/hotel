<?php

namespace App\Http\Middleware;

use Closure;

class Hoteladmin
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
        if ($request->user() && $request->user()->usertype == '1'){
            return $next($request);
    }
    return redirect()->guest('login');
    }
}
