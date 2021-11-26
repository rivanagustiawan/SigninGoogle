<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class Login extends Controller
{
    public function google(){
        return Socialite::driver('google')->redirect();
    }
    public function callback(){
        $callback = Socialite::driver('google')->stateless()->user();

        session(['name' => $callback->getName()]);
        session(['email' => $callback->getEmail()]);
        session(['ava' => $callback->getAvatar()]);

        return redirect('/dashboard');
    }
}
