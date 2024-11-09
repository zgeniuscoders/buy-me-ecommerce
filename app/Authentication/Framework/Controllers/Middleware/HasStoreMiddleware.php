<?php

namespace App\Authentication\Framework\Controllers\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasStoreMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->user()->store()->exists()) {
            return $next($request);
        }

        return  redirect()->route("home")
            ->with("Shop", "vous n'avez pas le droit d'acceder a cette page car vous n'avez pas de boutique");
    }
}
