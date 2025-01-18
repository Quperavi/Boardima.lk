<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the user is authenticated
         if (Auth::check()) {
            return $next($request); // User is authenticated, proceed to the next middleware or route
        }

        // If not authenticated, redirect to the login page or display an error
        return redirect('/login')->with('error', 'Unauthorized access. Please log in.');
    }
}
