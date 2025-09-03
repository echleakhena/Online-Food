<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ( $user ->HasRole('admin')){
            return $next($request);
        }else{
            return  back()->with('error', 'You do not have admin access') ;
        }
    }
}