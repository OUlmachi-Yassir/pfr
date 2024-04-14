<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer; 

class FreelancerController extends Controller
{
    public function index()
    {
        $freelancers = Freelancer::all();
        return view('freelancerDash', ['freelancers' => $freelancers]);
    }


    public function freeInfo()
    {
        return view('/freeInfo');
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'logo' => 'nullable|image', 
        'experience' => 'nullable|integer', 
        'discreption' => 'nullable|string', 
    ]);

    $imageName = null; 
    if ($validatedData->hasFile('logo')) {
        
        $imageName = time() . '.' . $validatedData->file('logo')->getClientOriginalExtension();
        $validatedData->file('logo')->move(public_path('images'), $imageName);
    }



    $freelancer = new Freelancer();
    $freelancer->user_id = auth()->id();
    $freelancer->logo = $imageName; 
    $freelancer->experience = $validatedData->input('experience');
    $freelancer->discreption = $validatedData->input('discreption');

    $freelancer->save();

    return redirect()->route('freelancers.dash')->with('success', 'Freelancer ajouté avec succès!');
}

}
