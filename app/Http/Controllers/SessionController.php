<?php

namespace App\Http\Controllers;


use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        if(! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry these Credentials dont match',
            ]);
        }
        $request->session()->regenerate();
        return redirect('/jobs');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
