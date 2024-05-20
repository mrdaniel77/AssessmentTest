<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){

        $log = $request->validate([
            'email' => ['required', 'email'],
            'password' =>  ['required']
        ]);

        if(Auth::attempt($log)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            // Autenticação falhou
            return redirect()->back()->withErrors(['login' => 'Invalid Credentials.']);
        }
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard(){
        return view('layout.dashboard');
    }
}
