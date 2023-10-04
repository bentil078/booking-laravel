<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    // accept role as a paprameter and check if user is allowed or has a role, if not redirect them to their dashboard
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (auth()->user()->role !== $role){
            return redirect()->route('dashboard');
            
        }
        return $next($request);
    }
}
