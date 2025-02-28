<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function auth(AuthRequest $request)
    {
        // dd($request->toArray());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // REGENERETE SESSION
            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'You are log in!');
        }


        return redirect()->back()
            ->withErrors(['email' => 'The provided credentials is not correct.'])
            ->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
