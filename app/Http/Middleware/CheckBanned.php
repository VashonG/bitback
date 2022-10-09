<?php

namespace App\Http\Middleware;

use Closure;

class CheckBanned
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
        if( $request->user()->banned )
        {
            
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return response()->redirectTo( route('login') );
        }
        else
        return $next($request);
    }
}
