<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('contact.create');
    }
    public function store(Request $request){
    $input =$request->all();
    User::create([
        'name'=>$input['name'],
        'email'=>$input['email'],
        'password'=>Hash::make($input['password']),
        'role' => $request->role,
    ]);
    // Redirect based on role
    if ($request->role === 'utilisateur') {
        return redirect()->route('info.form');
    } elseif ($request->role === 'entreprise') {
        return redirect()->route('enterprise.info');
    } elseif ($request->role === 'freelancer') {
        return redirect()->route('freelincer.info');
    }
    }
}
