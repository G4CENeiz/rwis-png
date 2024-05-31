<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // if ($user) {
        //     if ($user->roles == '1') {
        //         return redirect()->intended('rw');
        //     } else if ($user->roles == '2') {
        //         return redirect()->intended('rt');
        //     }
        // }
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->roles == '1') {

                return redirect()->intended('rw');

                echo auth()->user()->password;
            } else if ($user->roles == '2') {
                return redirect()->intended('rt');
            }
        }

        // return redirect('login')->withErrors(['username' => 'Invalid credentials provided.']);
    }

    public function register()
    {
        return view('register');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
