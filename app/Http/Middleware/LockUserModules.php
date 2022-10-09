<?php

namespace App\Http\Middleware;

use Closure;

class LockUserModules
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
        /*
        if( ! $request->user()->active || ! $request->user()->email_verified_at || ! $request->user()->phone_verified_at )
        {
            return response()->error('user.not_verified');
        }
        else
        */
        return $next($request);
    }
}
