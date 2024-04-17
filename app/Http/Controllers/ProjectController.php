<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create()
    {

    $enterpriseId = Auth::user()->enterprise->id;
    $projet= Project::where('enterprise_id', $enterpriseId)->get();
        return view('myPost',compact('projet'));
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:IT development,Design,Art',
        ]);

      
        $enterpriseId = auth()->user()->enterprise->id;

    Project::create([
        'enterprise_id' => $enterpriseId,
        'titre' => $validatedData['name'],
        'description' => $validatedData['description'],
        'type' => $validatedData['type'],
    ]);

        return redirect()->back()->with('success', 'Projet créé avec succès!');
    }
}
