<?php 

namespace o2l\OAuth2Server\Middleware;

use Closure;
use LucaDegasperi\OAuth2Server\Filters\OAuthFilter;

class OAuthMiddleware extends OAuthFilter {

    public function handle($request, Closure $next)
    {
        parent::filter();
        return $next($request);
    }
}
