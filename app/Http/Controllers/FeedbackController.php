<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(  )
    {
        $user = auth()->user();
        $feedback = new Feedback();

        request()->validate([
            'message' => 'required'
        ]);

        $feedback->create([
            'user_id' => $user->id,
            'message' => request('message')
        ]);
    
        return back()->with('success','Thank You for your valuable time.');

    }
}
