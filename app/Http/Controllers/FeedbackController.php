<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('welcome', ['feedbacks' => $feedbacks]);
    }

    public function showFeedbackForm()
    {
        return view('myFeed');
    }

    public function submitFeedback(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        Feedback::create([
            'user_id' => auth()->id(), 
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }   

}
