<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('login.register');
    }

    public function register_user(RegisterRequest $request)
    {
        $password = Hash::make($request->password);

        // dd($request->toArray());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);

        return redirect()->route('login')->with('success', 'You are register and you can login');
    }
}
