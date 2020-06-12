<?php

namespace App\Http\Middleware;

use Closure;

//added in App\Http\Kernel: protected $middleware;
class AppMiddleware
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
        //$request->merge(['one' => 'uno']);
        //$request['one'] = 'dos';
        view()->share('title', 'PokePedia');
        view()->share('subtitle', 'Pokemón');
        return $next($request);
    }
}
