<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function showAuth(Request $request) {
        if(Auth::user()) return redirect()->back();

        return view('auth');
    }

    public function login(Request $request) {
        // dd(1);
        if(Auth::user()) return redirect('/');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Неверный email или пароль',
        ]);
    }

    public function register(Request $request) {
        if(Auth::user()) return redirect()->back();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed|min:4',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request) {
        Auth::guard('user')->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect('auth');
    }

}
