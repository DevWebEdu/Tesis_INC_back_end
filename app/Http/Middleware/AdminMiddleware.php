<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario está autenticado y es admin
        if (!auth()->check() || auth()->user()->admin != 1) {
            return response()->json(['message' => 'Acceso denegado', 'admin' => auth()->user()], 403);
        }
       
        return $next($request);
        
    }
}
