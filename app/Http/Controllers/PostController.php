<?php

namespace App\Http\Controllers;

use App\Models\jobe;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alo()
{
    if (auth()->user()->enterprise) {
        // Retrieve posts related to the authenticated user's jobe IDs
        $userJobeIds = auth()->user()->enterprise->jobe->pluck('id');
        $posts = Post::whereIn('jobe_id', $userJobeIds)->get();
        $jobes = jobe::all();
        
    } else {
        // If the user is not associated with an enterprise, set $posts to an empty collection
        $posts = collect();
    }
    return view('myPost', compact('posts','jobes'));
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
        $post = Post::findOrFail($id);
        
        // Check if the authenticated user is the owner of the post
        if ($post->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
