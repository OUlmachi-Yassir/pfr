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
        // Retrieve posts related to the authenticated user's jobe IDs
        $enterpriseId = Auth::user()->enterprise->id;

        $userJobeIds = auth()->user()->enterprise->jobe->pluck('id');
        $posts = Post::whereIn('jobe_id', $userJobeIds)->get();
        $jobes = jobe::all();
        $projet = Project::where('enterprise_id', $enterpriseId)->get(); 

        
    } else {
        // If the user is not associated with an enterprise, set $posts to an empty collection
        $posts = collect();
    }
    return view('myPost', compact('posts','jobes','projet'));
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
