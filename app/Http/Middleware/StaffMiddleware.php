<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StaffMiddlewareMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
       $user = Auth::user();
        if ( $user ->HasRole('admin') ||  $user->HasRole('user') ) {
            return $next($request);
        }else{
            return response()->json(['message' => 'You are not an admin'], 401);
        }
    }
}