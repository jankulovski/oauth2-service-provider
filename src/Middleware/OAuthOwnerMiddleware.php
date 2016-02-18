<?php 

namespace o2l\OAuth2Server\Middleware;

use Closure;
use LucaDegasperi\OAuth2Server\Filters\OAuthOwnerFilter;

class OAuthOwnerMiddleware extends OAuthOwnerFilter {

    public function handle($request, Closure $next)
    {
        parent::filter();
        return $next($request);
    }
}
