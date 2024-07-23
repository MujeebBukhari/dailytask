<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRegisterController extends Controller
{
    public function create()
    {
       return view('auth.register');
    }

    public function store(Request $request)
    {
      $validated =  $request->validate([
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
       ]);
       $user = User::create($validated);
       Auth::login($user);  
       return redirect('/jobs');

    }
   
}
