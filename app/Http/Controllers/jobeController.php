<?php

namespace App\Http\Controllers;

use App\Models\Jobe;
use App\Models\Enterprise;
use App\Models\FreelancerProject;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jobeController extends Controller
{

    public function index()
{
    $enterpriseId = Auth::user()->enterprise->id;

    $jobes = Jobe::where('enterprise_id', $enterpriseId)->get();

    $projet = Project::where('enterprise_id', $enterpriseId)->get(); 
    
    $enterprises = Enterprise::all();
    return view('myPost', compact('jobes','projet','entreprises'));
}

      
    public function anotherPgae()
    {
        $jobes = Jobe::all();
        
        return view('dashboard', compact('jobes'));
    }
    public function create()
    {
        $enterpriseId = Auth::user()->enterprise->id;

        $enterprises = Enterprise::all();
        $projet = Project::where('enterprise_id', $enterpriseId)->get(); 
        return view('myPost', compact('enterprises','projet'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'titre' => 'required',
        'discreption' => 'required',
        'competence' => 'required',
        'type' => 'required|in:à distance,hybride,à temps plein',
    ]);

    $enterpriseId = auth()->user()->enterprise->id;

    Jobe::create([
        'enterprise_id' => $enterpriseId,
        'titre' => $validatedData['titre'],
        'discreption' => $validatedData['discreption'],
        'competence' => $validatedData['competence'],
        'type' => $validatedData['type'],
    ]);

    return back()->with('success', 'Job post created successfully!');
}


public function ajaxSearch(Request $request)
{
    $query = $request->input('q');

    $results = Jobe::where('titre', 'like', "%$query%")
                   ->orWhere('competence', 'like', "%$query%")
                   ->orWhere('type', 'like', "%$query%")
                   ->get();

    return response()->json($results);
}


    public function apply(Request $request, $jobeId)
    {
        $validatedData = $request->validate([
            'cv' => 'required|mimes:pdf|max:2048', 
        ]);

        $jobe = Jobe::findOrFail($jobeId);

        $jobe->posts()->create([
            'user_id' => auth()->user()->id,
            'cv' => $request->file('cv')->store('cv_files'),
        ]);

        // Redirect back with success message
        return back()->with('success', 'Job application submitted successfully!');
    }


    public function edit($id)
    {
        $jobe = jobe::findOrFail($id);
        
        return view('editJobe', compact('jobe'));
    }
    
    public function update(Request $request, $id)
{
    $jobe = Jobe::findOrFail($id);
    
    $validatedData = $request->validate([
        'titre' => 'required',
        'discreption' => 'required',
        'competence' => 'required',
        'type' => 'required|in:à distance,hybride,à temps plein',
    ]);

    $jobe->update($validatedData);
    
    return redirect('myPost')->with('success', 'Job updated successfully.');
}


    public function destroy($id)
    {
        $jobe = jobe::findOrFail($id);
        $jobe->delete();
        return redirect()->back()->with('success', 'Job deleted successfully.');
    }

    public function stat()
    {
        $jobes = Jobe::all();
        $userCount = User::where('role', 'utilisateur')->count();
        $enterpriseCount = Enterprise::count();
        $jobCount = Jobe::count();
        
        return view('dashboard', compact('jobes', 'userCount', 'enterpriseCount', 'jobCount'));
    }
    
    

}

