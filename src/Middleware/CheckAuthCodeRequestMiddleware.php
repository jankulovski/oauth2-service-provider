<?php 

namespace o2l\OAuth2Server\Middleware;

use Closure;
use LucaDegasperi\OAuth2Server\Filters\CheckAuthCodeRequestFilter;

class CheckAuthCodeRequestMiddleware extends CheckAuthCodeRequestFilter {

    public function handle($request, Closure $next)
    {
        parent::filter();
        return $next($request);
    }
}
