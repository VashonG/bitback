<?php

namespace App\Http\Middleware;

use Closure;

class PostbackTracking
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

        $response = $next($request);

        $paramCheck = array_intersect( array_keys($request->all() ) , config('postback.trigger_params') );
        
        if( $paramCheck )
        {
            foreach(config('postback.networks') as $network => $config)
            {   
                foreach($paramCheck as $check)
                if( isset($config[$check] ) && $request->get( $check ) == $config[$check] )
                {
                    $cookie_data = [];
                    $cookie_data['network'] = $network;
                    $cookie_data[$check] = $config[$check];
                    foreach($config['params'] as $param)
                        if($request->get($param)) $cookie_data[$param] = $request->get($param);

                        return $response->cookie('pcb_lead', json_encode($cookie_data), $config['duration']?? 1440 );
                }
            }
        }
        return $response;
    }
}
