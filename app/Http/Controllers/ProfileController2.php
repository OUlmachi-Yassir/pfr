<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController2 extends Controller
{
    public function edit()
    {
    $user = Auth::user();
    $profile = $user->profile;
    $freelancer =auth()->user()->freelancer;
    return view('profile.edit', compact('user','profile','freelancer'));
    }

    public function update(Request $request)
    {   
        $profile = auth()->user()->profile;
        $profile->update($request->all());
        
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
