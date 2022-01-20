<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	// Index
    public function index()
    {
    	return view('dashboard.index');
    }
    // Dashboard
    public function dashboard( Request $request )
    {
    	if(!Auth::check()){
    		return redirect('/login');
    	}
    	return view('dashboard.dashboard');
    }
    // registration
	public function register()
	{
		return view('dashboard.register');
	}
    // Login
    public function login()
    {
        if(Auth::check()){
            return redirect('dashboard');
        }
    	return view('dashboard.login');
    }
}
