<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create() {
		return view('feedback-form');
	}
	
	public function send(Request $request):RedirectResponse{
		$validated= $request->validate([
			'full_name'=> 'required|string|max:100',
			'email'=> 'required|email',
			'message'=> 'required',
		]);
		
		$name= $request->input('full_name');
		$email= $request->input('email');
		$comment= $request->input('message');
		
		Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
			->send(new Feedback($name, $email, $comment));
		
		return redirect('/feedback/success');
	}
	
	public function success(){
		return view('feedback-success');
	}
}