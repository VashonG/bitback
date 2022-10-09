<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silber\PageCache\Middleware\CacheResponse as BaseCacheResponse;

class ProCacheBee extends BaseCacheResponse
{
    protected function shouldCache(Request $request, Response $response)
    {
        $current_route =  str_replace( app()->getLocale().'.','',$request->route()->getName());
        $skip_cache_routes = ['out','extension.out','out.user.link','all_deals','deal.category', 'register', 'login','contact'];
        
        // In this example, we don't ever want to cache pages if the
        // URL contains a query string. So we first check for it,
        // then defer back up to the parent's default checks.
        if ($request->getQueryString() || in_array(  $current_route, $skip_cache_routes )  ) {
            return false;
        }

        return parent::shouldCache($request, $response);
    }
}
