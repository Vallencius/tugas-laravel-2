<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function index() {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if (Auth::user()->role == 'Admin') {
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/rooms');
        }

        return back()->with('status', 'Invalid login details');
    }

    public function logout(){
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('home'));
    }

    public function register() {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function registerValidate(Request $request) {
        $credentials = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password' => 'required',
            'confirm' => 'required|same:password'
        ]);

        User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'role' => 'Guest'
        ]);

        return redirect()->intended('/login');
    }
}
