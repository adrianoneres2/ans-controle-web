<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        if(Auth::check())
        {
            return view('home');
        }
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
         $credentials = $request->validate([
             'email' => ['required'],
             'password' => ['required'],
         ]);

         if(Auth::attempt($credentials))
         {
             $userAuth = Auth::user();
             $request->session()->regenerate();
             Auth::login($userAuth, true);
             return redirect()->intended('home');
         }
         return back()->withErrors(['Usuário ou senha inválidos']);
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
