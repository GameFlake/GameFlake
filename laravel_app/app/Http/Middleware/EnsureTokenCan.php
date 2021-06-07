<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenCan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $privilege
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        if (!in_array($permission, $request->user()->getPermissions())) {
            $responseJson = [
                'error' => 'No autorizado. Buen intento.',
                'codigo' => 403
            ];
            return response()->json($responseJson, 403);
        }
        return $next($request);
    }
}
