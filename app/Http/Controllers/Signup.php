<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Signup extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'login' => 'required|string|unique:users,login',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('signin');
    }
}
