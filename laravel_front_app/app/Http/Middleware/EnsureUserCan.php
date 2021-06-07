<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserCan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        if(!$request->session()->has('permissions') ||
           !in_array($permission, $request->session()->get('permissions'))) {
            return redirect('/');
        }

        return $next($request);
    }
}
