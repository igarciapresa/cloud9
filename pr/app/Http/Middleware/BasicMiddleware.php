<?php

namespace App\Http\Middleware;

use Closure;

class BasicMiddleware
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
        $request['tituloApp'] = 'Mi App';
        return $next($request);
    }
}
