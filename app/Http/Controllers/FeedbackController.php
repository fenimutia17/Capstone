<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function showFeedbackForm()
    {
        return view('feedback.input');
    }

    public function submitFeedback(Request $request)
    {
        $request->validate([
            'recommendation' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required',
        ]);

        Feedback::create($request->only('recommendation', 'rating', 'review'));

        return redirect()->route('feedback.list')->with('success', 'Feedback submitted successfully!');
    }

    public function listFeedback()
    {
        $feedbackList = Feedback::all();
        return view('feedback.list', compact('feedbackList'));
    }
}
