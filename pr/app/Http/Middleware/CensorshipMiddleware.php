<?php

namespace App\Http\Middleware;

use Closure;

class CensorshipMiddleware
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
        $request['dato1'] = 'algo';
        view()->share('dato2', 'mas');
        echo '1';
        $response = $next($request); //controlador
        echo '2';
        $texto = $response->getOriginalContent();
        if(strpos($texto, 'sex') !== false) {
            return redirect(url('/'));
        }
        return $response;
    }
}
