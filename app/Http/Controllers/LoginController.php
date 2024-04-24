<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' =>['required','email'],
            'password'=>['required'],
        ]);
        if(Auth::attempt($credentials)){
            
       
        $user = Auth::user();
        if ($user->role === 'utilisateur') {
            return redirect()->route('dashboard');
            } elseif ($user->role === 'entreprise') {
            return redirect()->route('dashboard.entreprise');
            } elseif ($user->role === 'admin') {
                return redirect('/');
            }else{
                return redirect()->route('freelancers.index');
            }

        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid email or password. Please try again.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
