<?php

namespace Responsive\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class ApiResponseMiddleware
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
        // going to comment it because it was making the Laravel request object empty
        // we should not set content type header for user, we should ask them to set a header if needed.

        /*$request->headers->set('Content-Type','application/json');
        $request->headers->set('X-Requested-With','XMLHttpRequest');

        return $next($request);*/
        $request->headers->set('X-Requested-With','XMLHttpRequest');
        return $next($request);
    }
}
