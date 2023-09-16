<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class TelescopeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            abort(403, 'Unauthorized');
        }

        // Check if the user has admin privileges (you can customize this logic)
        if (!Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
