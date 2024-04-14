<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
    $input =$request->all();
    $user =User::create([
        'name'=>$input['name'],
        'email'=>$input['email'],
        'password'=>Hash::make($input['password']),
        'role' => $request->role,
    ]);
    Auth::login($user);
    // Redirect based on role
    if ($request->role === 'utilisateur') {
        return redirect()->route('info.form', ['id' => $user->id]);
    } elseif ($request->role === 'entreprise') {
        return redirect()->route('enterprise.info');
    } elseif ($request->role === 'freelancer') {
        return redirect()->route('freelancer.info');
    }
    }
}
