<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {

    }
    public function create()
    {

    }
	// Save user
    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required|string|max:20',
    		'email' => 'required|unique:users',
    		'role' => 'required',
    		'password' => 'required',
    	]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('login');
    }
    public function update()
    {

    }

    public function destroy()
    {

    }
}
