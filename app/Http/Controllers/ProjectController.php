<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create()
{
    $enterpriseId = Auth::user()->enterprise->id;
    $projet = Project::where('enterprise_id', $enterpriseId)->get(); 
    $enterprises = Enterprise::all();
    return view('myPost', compact('projet', 'enterprises', 'enterpriseId'));
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
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
        'type' => $validatedData['type'],
    ]);

        return redirect()->back()->with('success', 'Projet créé avec succès!');
    }





    public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('proEdit', compact('project'));
}

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        // Validez les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:IT development,Design,Art',
        ]);

        // Mettez à jour les données du projet
        $project->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'type' => $validatedData['type'],
        ]);

        return redirect()->back()->with('success', 'Projet mis à jour avec succès!');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->back()->with('success', 'Projet supprimé avec succès!');
    }
}
