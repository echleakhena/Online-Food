<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
   
   public function handle(Request $request, Closure $next): Response
    {

        // ✅ Check if user is not authenticated
        if (!Auth::check()) {
            return redirect()->route('auth'); // redirect to login if not logged in
        }

        // ✅ User is authenticated, proceed to next
        return $next($request);

    }
}