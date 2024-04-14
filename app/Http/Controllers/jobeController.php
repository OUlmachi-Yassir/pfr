<?php

namespace App\Http\Controllers;

use App\Models\Jobe;
use App\Models\Enterprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jobeController extends Controller
{

    public function index()
{
    $enterpriseId = Auth::user()->enterprise->id;

    $jobes = Jobe::where('enterprise_id', $enterpriseId)->get();

    return view('myPost', compact('jobes'));
}

            
    public function anotherPgae()
    {
        $jobes = Jobe::all();
        return view('dashboard', compact('jobes'));
    }
    public function create()
    {
        $enterprises = Enterprise::all();
        return view('myPost', compact('enterprises'));
    }

    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'titre' => 'required',
        'discreption' => 'required',
        'competence' => 'required',
        'type' => 'required|in:à distance,hybride,à temps plein',
    ]);

    // Get the enterprise ID of the authenticated user
    $enterpriseId = auth()->user()->enterprise->id;

    // Create a new Jobe instance and save it to the database
    Jobe::create([
        'enterprise_id' => $enterpriseId,
        'titre' => $validatedData['titre'],
        'discreption' => $validatedData['discreption'],
        'competence' => $validatedData['competence'],
        'type' => $validatedData['type'],
    ]);

    // Redirect back with success message
    return back()->with('success', 'Job post created successfully!');
}


public function ajaxSearch(Request $request)
{
    $query = $request->input('q');

    // Perform your search query here based on the $query variable
    $results = Jobe::where('titre', 'like', "%$query%")
                   ->orWhere('competence', 'like', "%$query%")
                   ->orWhere('type', 'like', "%$query%")
                   ->get();

    return response()->json($results);
}


    public function apply(Request $request, $jobeId)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'cv' => 'required|mimes:pdf|max:2048', // Assuming CVs are PDF files with max size of 2MB
        ]);

        // Get the job posting
        $jobe = Jobe::findOrFail($jobeId);

        // Save the job application to the database
        $jobe->posts()->create([
            'user_id' => auth()->user()->id,
            'cv' => $request->file('cv')->store('cv_files'),
        ]);

        // Redirect back with success message
        return back()->with('success', 'Job application submitted successfully!');
    }


    public function edit($id)
    {
        // Fetch the job with the given ID
        $jobe = jobe::findOrFail($id);
        
        // Return the view for editing the job
        return view('editJobe', compact('jobe'));
    }
    public function update(Request $request, $id)
{
    // Find the job with the given ID
    $jobe = Jobe::findOrFail($id);
    
    // Validate the incoming request data
    $validatedData = $request->validate([
        'titre' => 'required',
        'discreption' => 'required',
        'competence' => 'required',
        'type' => 'required|in:à distance,hybride,à temps plein',
    ]);

    // Update the job with the validated data
    $jobe->update($validatedData);
    
    // Redirect back with a success message
    return redirect('myPost')->with('success', 'Job updated successfully.');
}


    public function destroy($id)
    {
        // Find the job with the given ID
        $jobe = jobe::findOrFail($id);
        
        // Delete the job
        $jobe->delete();
        
        // Redirect back with a success message
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

