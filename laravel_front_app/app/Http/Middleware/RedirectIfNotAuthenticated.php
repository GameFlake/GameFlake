<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfNotAuthenticated
{
    /**
     * Redirige a la pagina de inicio de sesion si NO hay un token en la sesion
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->has('token')) {
            return redirect('login');
        }
        return $next($request);
    }
}
