<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
        public function index()
        {
            $freelancers = Freelancer::all();
            $projet= Project::paginate(2);
            $projetCont=Project::all()->count();
            return view('freelancerDash', ['freelancers' => $freelancers, 'projet'=>$projet,'projetCont'=>$projetCont]);
        }
    public function showfreelancer()
    {
        $user = Auth::user();
        $freelancer = $user->freelancer;
        return view('edit', ['freelancer' => $freelancer]);
    }
    public function free()
    {
        $user=User::get();
        $freelancers = Freelancer::get();
        return view('dashEntreprise', compact('freelancers'));
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
            'lieux' => 'nullable|string',
            'fonction' => 'nullable|string',
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
        $freelancer->lieux = $validatedData['lieux'];
        $freelancer->discreption = $validatedData['discreption'];
        $freelancer->fonction = $validatedData['fonction'];
        $freelancer->save();

        return redirect()->route('freelancers.index')->with('success', 'Freelancer ajouté avec succès!');
    }
}
