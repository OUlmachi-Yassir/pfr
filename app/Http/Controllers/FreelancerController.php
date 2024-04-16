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

    // Check if the file was uploaded
    if ($request->hasFile('logo')) {
        $imageFile = $request->file('logo');
        
        $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('images'), $imageName);
    }

    $freelancer = new Freelancer();
    $freelancer->user_id = auth()->id();
    $freelancer->logo = $imageName;
    $freelancer->experience = $validatedData['experience']; 
    $freelancer->discreption = $validatedData['discreption'];
    $freelancer->save();

    return redirect()->route('freelancers.index')->with('success', 'Freelancer ajouté avec succès!');
}

}
