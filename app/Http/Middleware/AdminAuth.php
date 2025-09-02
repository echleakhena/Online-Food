<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, \Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('auth'); 
        }
        return $next($request);
    }
}




