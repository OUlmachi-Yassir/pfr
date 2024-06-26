<?php

namespace App\Http\Controllers;

use App\Models\jobe;
use App\Models\post;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alo()
{
    if (auth()->user()->enterprise) {
        $enterpriseId = Auth::user()->enterprise->id;

        // Fetch all projects related to the enterprise and eager load freelancerProjects, paginated
        $projet = Project::with('freelancerProjects')->where('enterprise_id', $enterpriseId)->paginate(2);

        // Fetch jobe IDs related to the enterprise
        $userJobeIds = auth()->user()->enterprise->jobe->pluck('id');

        // Fetch posts related to the jobe IDs
        $posts = Post::whereIn('jobe_id', $userJobeIds)->get();

        // Initialize a collection for freelancerProjects
        $freelancerProjects = collect();

        // Loop through each project to collect freelancerProjects
        foreach ($projet as $project) {
            $freelancerProjects = $freelancerProjects->merge($project->freelancerProjects);
        }

        $jobes = Jobe::all();
    } else {
        $posts = collect();
        $projet = collect();
        $freelancerProjects = collect();
        $jobes = Jobe::all();
    }

    return view('myPost', compact('posts', 'jobes', 'projet', 'freelancerProjects'));
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the post by ID
        $post = Post::findOrFail($id);
    

        
        $post->delete();
    
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
    
}
