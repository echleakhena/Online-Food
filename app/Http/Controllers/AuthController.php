<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(){
        return view('Backend.Auth.Login');
    }

     public function adminlogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    $remember = $request->filled('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        return redirect()->route('admin.index'); 
    }

    return back()->withErrors([
        'email' => 'Invalid credentials. Please try again.',
    ])->withInput($request->only('email'));
}

    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth'); 
    }
}
