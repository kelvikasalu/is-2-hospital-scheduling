<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all(); // Fetch all feedback from the database
        return view('feedback.index', compact('feedback')); // Return the view with feedback data
        return view('admin.feedback.index', compact('feedbacks'));
    }

        
       
    
    
}
