<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:admin');
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	#Validate form data
    	#Attempt to log in 
    	#If succesful redirect to intended
    	#Id unseccesful redirect back with form data

    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'

    	]);
    	#This returns True or False
    	if (Auth::guard('admin')->attempt( ['email' => $request->email,'password'=> $request->password], $request->remember)) {
    	 	
    	 	return redirect()->intended(route('admin.dashboard'));
    	 } 

    	 return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {

		Auth::logout();

    }
}