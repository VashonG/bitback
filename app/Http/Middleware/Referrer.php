<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;

class Referrer
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

        if (!auth()->user()  )
        {
            $query = request()->all();
            $utm_parameters = array_intersect_key($query,array_flip(['utm_source','utm_medium','utm_campaign']));
		
            if(request()->headers->get('referer') && !$request->hasCookie('lbp_referrer')){
            Cookie::queue(Cookie::forever('lbp_referrer', request()->headers->get('referer')));
            }
            if($utm_parameters && !$request->hasCookie('lbp_utm')){
            Cookie::queue(Cookie::forever('lbp_utm', http_build_query($utm_parameters,'',', ') ));
            }

            return $next($request);
        }
        if(auth()->user() && auth()->user()->email_verified_at)
            {
                if($request->cookie('lbp_referrer'))
                Cookie::queue(Cookie::forget('lbp_referrer'));
                if($request->cookie('lbp_utm'))
                Cookie::queue(Cookie::forget('lbp_utm'));


            }
        return $next($request);
    }
}
